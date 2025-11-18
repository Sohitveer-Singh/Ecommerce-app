<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Listing;
use App\Models\ListingCategory;
use App\Models\User;
use App\Models\ListingTag;
use Illuminate\Support\Collection;



class IndexController extends Controller
{
    public function index(){
        $listings = Listing::public()->with('location', 'category', 'tags')->latest()->take(12)->get();

        $categories = ListingCategory::where('status', true)->orderBy('name')->get();

        $categoriesWithListing = ListingCategory::where('status', true)
            ->with('coverListing')
            ->inRandomOrder()
            ->take(12)
            ->get();

        $featuredTagSlugs = [
            'free-wifi',
            'pet-friendly',
            // 'takeaway',
        ];

        $featuredTags = ListingTag::whereIn('slug', $featuredTagSlugs)
            ->where('status', true)
            ->get();

        // This will hold our final data: [ Tag1 => [Cat1, Cat2], Tag2 => [CatA, CatB] ]
        $featuredTagsWithCategories = new Collection();
        // 2. Loop through each tag and get its 2 related categories
        foreach ($featuredTags as $tag) {
            $relatedCategories = ListingCategory::whereHas('listings', function ($query) use ($tag) {
                $query->public() // ...are public
                ->whereHas('tags', function ($q) use ($tag) {
                    $q->where('listing_tags.id', $tag->id); // ...and have this specific tag
                });
            })
                ->with('coverListing') // Eager load a cover image
                ->take(2)
                ->get();

            // 3. If we found categories, add them to the tag object
            //    (We check isNotEmpty() so we don't show empty sections)
            if ($relatedCategories->isNotEmpty()) {
                $tag->related_categories = $relatedCategories;
                $featuredTagsWithCategories->push($tag);
            }
        }

        return view('public.index', compact('listings', 'categories','categoriesWithListing','featuredTagsWithCategories'));

    }

    public function viewMemberships(){

        return view('public.memberships');
    }

    public function aboutUs(){

        return view('public.about-us');
    }

    public function privacyPolicy(){

        return view('public.privacy-policy');
    }

    public function listingCategories()
    {
        // 1. Load the listings for this category
        $categories = ListingCategory::where('status', true)->orderBy('name')->get();

        // 2. Pass the listings AND the *category* to the view
        return view('public.listing-categories', compact('categories'));
    }
    public function allListings(Request $request)
    {
        // --- 1. Get Filter Inputs ---
        $selectedCategoryIds = $request->input('categories', []);
        $selectedTagIds = $request->input('tags', []);
        $selectedRadius = $request->input('radius');

        // --- 2. Get Data for Dropdowns ---
        $categories = ListingCategory::published()->orderBy('name')->get();
        $tags = ListingTag::where('status', true)->orderBy('name')->get();

        // --- 3. Build the Listing Query ---
        $query = Listing::public() // Use your scope: where('status', 1)
        ->with(['category', 'location', 'tags','timings']); // Eager load

        // --- 4. Apply Filters ---

        // Filter by Categories
        // We use 'category_id' as defined in your Listing model.
        if (!empty($selectedCategoryIds) && is_array($selectedCategoryIds)) {
            $query->whereIn('category_id', $selectedCategoryIds);
        }

        // Filter by Tags (Many-to-Many)
        // We use whereHas to check the 'tags' relationship
        if (!empty($selectedTagIds) && is_array($selectedTagIds)) {
            $query->whereHas('tags', function ($q) use ($selectedTagIds) {
                $q->whereIn('listing_tags.id', $selectedTagIds);
            });
        }

        // Filter by Distance (Radius)
        // This queries the 'location' relationship
        if ($selectedRadius) {
            // Placeholder: Get user's location from session, GeoIP, etc.
            $userLatitude = 30.3753;  // Example: Chandigarh Lat
            $userLongitude = 76.7821; // Example: Chandigarh Lng

            // Haversine formula to calculate distance
            $haversine = "(
                6371 * acos(
                    cos(radians(?))
                    * cos(radians(latitude))
                    * cos(radians(longitude) - radians(?))
                    + sin(radians(?))
                    * sin(radians(latitude))
                )
            )";

            // Apply the filter using whereHas on the 'location' relationship
            $query->whereHas('location', function ($q) use ($haversine, $userLatitude, $userLongitude, $selectedRadius) {
                $q->whereRaw("{$haversine} < ?", [$userLatitude, $userLongitude, $userLatitude, $selectedRadius]);
            });
        }

        // --- 5. Execute Query and Paginate ---
        $listings = $query->latest()->paginate(12);

        // --- 6. Return the View with All Data ---
        return view('public.all-listings', [ // <-- Update this to your view's path
            'listings' => $listings,
            'categories' => $categories,
            'tags' => $tags,
            'selectedCategoryIds' => $selectedCategoryIds,
            'selectedTagIds' => $selectedTagIds,
            'selectedRadius' => $selectedRadius,
        ]);
    }


    public function listingDetails(Listing $listing)
    {
        // 1. Check if the listing is public and complete
        // This prevents users from viewing pending or disabled listings
        if ($listing->status == 0 || $listing->listing_step != 0) {
            abort(404); // Show a "Not Found" error
        }

        $listing->load(['category', 'tags', 'timings', 'location', 'user']);

        $recent_listings = Listing::public()->with('location')->latest()->take(4)->get();

        // 2. Pass the single $listing (singular) to the view
        return view('public.listing-details', compact('listing', 'recent_listings'));
    }

    public function listingByTag(ListingTag $tag)
    {
        // 1. Load the listings for this tag
        // We use the 'public()' scope we created to hide incomplete/disabled listings
        $listings = $tag
            ->listings()
            ->public() // <-- Your scope for status=1, step=0
            ->latest()
            ->paginate(12); // Paginate the results

        // 2. Pass the listings AND the tag to the view
        return view('public.listing-by-tag', compact('listings', 'tag'));
    }

    public function listingByCategory(ListingCategory $category)
    {
        // 1. Load the listings for this category
        $listings = $category->listings()->public()->latest()->paginate(12);

        // 2. Pass the listings AND the *category* to the view
        return view('public.listing-by-category', compact('listings', 'category'));
    }

    public function listingByUser(User $user)
    {
        // 1. Load the listings for this category
        $listings = $user->listings()->public()->latest()->paginate(12);

        // 2. Pass the listings AND the *category* to the view
        return view('public.listing-by-user', compact('listings', 'user'));
    }

}
