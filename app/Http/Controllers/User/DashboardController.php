<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
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

        return view('user.dashboard',compact('completedListings','pendingListings','listings'));
    }
}
