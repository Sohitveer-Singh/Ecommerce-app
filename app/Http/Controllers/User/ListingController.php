<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use App\Models\Listing;
use App\Http\Requests\User\StoreListingRequest;
use App\Http\Requests\User\StoreListingAddressRequest;
use App\Http\Requests\User\StoreListingTimingsRequest;
use App\Http\Requests\User\StoreListingAmenitiesRequest;
use App\Http\Requests\User\StoreListingLogoRequest;
use Illuminate\Http\RedirectResponse;
use App\Models\ListingCategory;
use App\Models\ListingTag;
use Illuminate\Support\Str;

class ListingController extends Controller
{
    public function index(): View
    {
        $user = Auth::user();

        // Get pending listings (step > 0)
        $pendingListings = $user->listings()
            ->where('listing_step', '>', 0)
            ->latest()
            ->get();
        $listings = $user->listings()->get();

        // Get complete listings (step = 0)
        $completedListings = $user->listings()
            ->where('listing_step', 0)
            ->latest()
            ->get();


        return view('user.listing.index', compact('completedListings', 'pendingListings', 'listings'));
    }

    public function edit(Listing $listing): View
    {
        if (Auth::id() !== $listing->user_id || $listing->listing_step != 0) {
            abort(403, 'This action is unauthorized or the listing is incomplete.');
        }
        return view('user.listing.edit', compact('listing'));
    }

    /**
     * Resumes a *specific* pending listing by its ID.
     */
    public function resumeListing(Listing $listing): RedirectResponse
    {
        // 1. Authorize: Make sure the user owns this listing
        if (Auth::id() !== $listing->user_id) {
            abort(403);
        }

        // 2. If it's already complete, just send them to the dashboard
        if ($listing->listing_step == 0) {
            return redirect()->route('user.dashboard')->with('info', 'That listing is already complete.');
        }

        // 3. Send them to the correct step
        return $this->redirectToStep($listing);
    }

    /**
     * Helper to redirect based on the listing's step.
     */
    protected function redirectToStep($listing): RedirectResponse
    {
        return match ((int)$listing->listing_step) {
            1 => redirect()->route('user.listing.address', $listing),
            2 => redirect()->route('user.listing.timing', $listing),
            3 => redirect()->route('user.listing.amenities', $listing),
            4 => redirect()->route('user.listing.logo', $listing),
            default => redirect()->route('user.listing.basic-details'),
        };
    }

    /**
     * Show the form for Step 1 (Create Listing Details).
     */
    public function create(): View
    {
        // This is the view for your first form (e.g., business name, description)
        return view('user.listing.details');
    }

    public function editDetails(Listing $listing): View
    {
        if (Auth::id() !== $listing->user_id || $listing->listing_step != 0) {
            abort(403, 'This action is unauthorized or the listing is incomplete.');
        }
        return view('user.listing.edit-details', compact('listing'));
    }

    public function updateDetails(StoreListingRequest $request, Listing $listing): RedirectResponse
    {
        $validatedData = $request->validated();

        $listing->update($validatedData);

        return redirect()->route('user.listing.edit', $listing)->with('success', 'Details saved!');
    }

    /**
     * Store the Listing Details (Step 1).
     */
    public function store(StoreListingRequest $request): RedirectResponse
    {
        $validatedData = $request->validated();
        $validatedData['created_by_user_id'] = $request->user()->id;
        $validatedData['listing_step'] = 1; // Set step to "awaiting address"

        // Create the listing and get the new model instance
        $listing = $request->user()->listings()->create($validatedData);

        // *** FIX 1: Redirect to the NEXT STEP, not back() ***
        return redirect()->route('user.listing.address', $listing)->with('success', 'Details saved! Now, please add your address.');
    }

    /**
     * Show the form for Step 2 (Create Listing Address).
     */
    public function createAddress(Listing $listing): View
    {
        // Authorize that the user owns this listing
        if (Auth::id() !== $listing->user_id || $listing->listing_step == 0) {
            abort(403, 'This action is unauthorized or the listing is complete.');
        }

        // This is the view for your address form
        return view('user.listing.address', compact('listing'));
    }

    /**
     * Store the Listing Address (Step 2).
     */
    public function storeAddress(StoreListingAddressRequest $request, Listing $listing): RedirectResponse
    {
        $validatedData = $request->validated();

        // Use updateOrCreate - this is safer for a multi-step form.
        // It will create the location if it doesn't exist, or update it if it does.
        $listing->location()->updateOrCreate(
            ['listing_id' => $listing->id], // Find location by listing_id
            $validatedData, // Update with this new data
        );

        // *** FIX 2: You MUST increment the listing_step ***
        $listing->update(['listing_step' => 2]); // Set step to "awaiting timings"

        // Redirect to the next step
        return redirect()->route('user.listing.timing', $listing)->with('success', 'Address saved successfully! Next, add your hours.');
    }


    public function editAddress(Listing $listing): View
    {
        if (Auth::id() !== $listing->user_id || $listing->listing_step != 0) {
            abort(403, 'This action is unauthorized or the listing is incomplete.');
        }
        // This is the view for your first form (e.g., business name, description)
        return view('user.listing.edit-address', compact('listing'));
    }

    public function updateAddress(StoreListingAddressRequest $request, Listing $listing): RedirectResponse
    {
        $validatedData = $request->validated();

        // Only pass the data you want to update
        $listing->location()->update($validatedData);

//        // This is the key:
//        $listing->location()->updateOrCreate(
//            ['listing_id' => $listing->id], // Find by this
//            $validatedData                  // Create or Update with this
//        );

        return redirect()->route('user.listing.edit', $listing)->with('success', 'Details saved!');
    }

    /**
     * Show the form for Step 3 (Create Listing Timings).
     */
    public function createTiming(Listing $listing): View
    {
        if (Auth::id() !== $listing->user_id || $listing->listing_step == 0) {
            abort(403, 'This action is unauthorized or the listing is complete.');
        }

        return view('user.listing.timing', [
            'listing' => $listing,
        ]);
    }

    public function storeTiming(StoreListingTimingsRequest $request, Listing $listing): RedirectResponse
    {
        // 1. Get the validated data (day_status[], open_time[], close_time[])
        $data = $request->validated();

        // 2. Define the days in the same order as your form's 0-6 index
        $days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];

        // 3. Loop through each day and save its data
        for ($i = 0; $i < 7; $i++) {
            $status = $data['day_status'][$i];

            // 4. Prepare the data for the database based on the status
            $dayData = match ($status) {
                'closed' => [
                    'is_closed' => true,
                    'open_time' => null,
                    'close_time' => null,
                ],
                '24hours' => [
                    'is_closed' => false,
                    'open_time' => '00:00:00',
                    'close_time' => '23:59:59', // Or '23:59' if your column is TIME
                ],
                'open' => [
                    'is_closed' => false,
                    'open_time' => $data['open_time'][$i],
                    'close_time' => $data['close_time'][$i],
                ],
            };

            // 5. Use updateOrCreate to add/update the row for this day
            // This prevents duplicate entries if the user re-submits the form
            $listing->timings()->updateOrCreate(
                ['day' => $days[$i]], // Find by this day
                $dayData, // Update or Create with this data
            );
        }

        // 6. Increment the main listing's step
        // (Assuming 3 is the next step, e.g., amenities)
        $listing->update(['listing_step' => 3]);

        // 7. Redirect to the next step
        return redirect()->route('user.listing.amenities', $listing)->with('success', 'Business hours saved!');
    }

    public function editTiming(Listing $listing): View
    {
        if (Auth::id() !== $listing->user_id || $listing->listing_step != 0) {
            abort(403, 'This action is unauthorized or the listing is incomplete.');
        }

        $timings = $listing->timings->keyBy('day');

        return view('user.listing.edit-timing', compact('listing','timings'));
    }

    public function updateTiming(StoreListingTimingsRequest $request, Listing $listing): RedirectResponse
    {
        // 1. Get the validated data (day_status[], open_time[], close_time[])
        $data = $request->validated();

        // 2. Define the days in the same order as your form's 0-6 index
        $days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];

        // 3. Loop through each day and save its data
        for ($i = 0; $i < 7; $i++) {
            $status = $data['day_status'][$i];

            // 4. Prepare the data for the database based on the status
            $dayData = match ($status) {
                'closed' => [
                    'is_closed' => true,
                    'open_time' => null,
                    'close_time' => null,
                ],
                '24hours' => [
                    'is_closed' => false,
                    'open_time' => '00:00:00',
                    'close_time' => '23:59:59',
                ],
                'open' => [
                    'is_closed' => false,
                    'open_time' => $data['open_time'][$i],
                    'close_time' => $data['close_time'][$i],
                ],
            };

            $listing->timings()->updateOrCreate(
                ['day' => $days[$i]], // Find by this day
                $dayData, // Update or Create with this data
            );
        }

        return redirect()->route('user.listing.edit', $listing)->with('success', 'Business hours saved!');
    }


    public function createAmenities(Listing $listing): View
    {
        if (Auth::id() !== $listing->user_id || $listing->listing_step == 0) {
            abort(403, 'This action is unauthorized or the listing is complete.');
        }
        // Fetch data for the form
        $categories = ListingCategory::where('status', '1')->orderBy('name')->get();
        $tags = ListingTag::orderBy('name')->get();

        return view('user.listing.amenities', [
            'listing' => $listing,
            'categories' => $categories,
            'tags' => $tags,
        ]);
    }


    public function storeAmenities(StoreListingAmenitiesRequest $request, Listing $listing): RedirectResponse
    {
        // 1. Validation and Authorization have already passed!
        $validated = $request->validated();

        // 2. Handle the SINGLE category
        $listing->category_id = $validated['categories'];

        // 3. Handle the MANY tags
        if ($request->has('tags')) {
            $listing->tags()->sync($validated['tags']);
        } else {
            $listing->tags()->detach();
        }

        // 4. Update the listing step and save
        $listing->listing_step = 4;// Step 4 is correct here
        $listing->save();

        // 5. Redirect to the next step
        return redirect()->route('user.listing.logo', $listing)->with('success', 'Categories and tags saved!');
    }

    public function editAmenities(Listing $listing): View
    {
        if (Auth::id() !== $listing->user_id || $listing->listing_step != 0) {
            abort(403, 'This action is unauthorized or the listing is incomplete.');
        }
        // Fetch data for the form
        $categories = ListingCategory::where('status', '1')->orderBy('name')->get();
        $tags = ListingTag::orderBy('name')->get();

        return view('user.listing.edit-amenities', [
            'listing' => $listing,
            'categories' => $categories,
            'tags' => $tags,
        ]);
    }


    public function updateAmenities(StoreListingAmenitiesRequest $request, Listing $listing): RedirectResponse
    {
        // 1. Validation and Authorization have already passed!
        $validated = $request->validated();

        // 2. Handle the SINGLE category
        $listing->category_id = $validated['categories'];

        // 3. Handle the MANY tags
        if ($request->has('tags')) {
            $listing->tags()->sync($validated['tags']);
        } else {
            $listing->tags()->detach();
        }

        $listing->save();

        // 5. Redirect to the next step
        return redirect()->route('user.listing.edit', $listing)->with('success', 'Categories and tags saved!');
    }

    /**
     * Show the form for Step 5 (Logo Upload).
     */
    public function createLogo(Listing $listing): View
    {
        if (Auth::id() !== $listing->user_id || $listing->listing_step == 0) {
            abort(403, 'This action is unauthorized or the listing is complete.');
        }

        return view('user.listing.logo', [
            'listing' => $listing,
        ]);
    }

    public function storeLogo(StoreListingLogoRequest $request, Listing $listing): RedirectResponse
    {
        // 1. Validation and Authorization have already passed.

        // 2. Get the file and its extension
        $file = $request->file('thumbnail');
        $extension = $file->getClientOriginalExtension();

        // 3. Generate a new, shorter random name (e.g., 12 characters)
        $filename = Str::random(12) . '.' . $extension;

        // 4. Store the file using storeAs() with your new name
        // The path will be 'thumbnails/newfilename.jpg'
        $path = $file->storeAs('thumbnails', $filename, 'public');

        // 5. Update the listing
        $listing->update([
            'thumbnail' => $path,
            'listing_step' => 0,
            'status' => 1,
        ]);

        // 6. Redirect to the dashboard
        return redirect()->route('user.dashboard')->with('success', 'Your listing has been submitted successfully!');
    }
}
