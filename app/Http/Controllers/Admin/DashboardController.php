<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ListingProduct;
use Illuminate\Http\Request;
use App\Models\Listing;
use App\Models\User;


class DashboardController extends Controller
{
    public function index()
    {

        $pendingListings = Listing::where('listing_step', '>', 0)
            ->count();

        $totalListings = Listing::count();

        $completedListings = Listing::where('listing_step', 0)
            ->count();

        $userCount = User::count();

        $productCount = ListingProduct::count();

        $joinedToday = User::whereDate('created_at', today())->count();

        $joinedMonth = User::whereMonth('created_at', today()->month)->count();

        return view('admin.dashboard',compact('completedListings','joinedToday','joinedMonth','pendingListings','totalListings','userCount','productCount'));
    }
}
