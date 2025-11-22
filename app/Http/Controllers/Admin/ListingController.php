<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Listing;

class ListingController extends Controller
{
    public function index()
    {
        // Get pending listings (step > 0)
        $pendingListings = Listing::where('listing_step', '>', 0)
            ->latest()
            ->get();
        $listings = Listing::latest()->get();

        // Get complete listings (step = 0)
        $completedListings = Listing::where('listing_step', 0)
            ->latest()
            ->get();

        return view('admin.listing.index',compact('completedListings', 'pendingListings', 'listings'));
    }
}
