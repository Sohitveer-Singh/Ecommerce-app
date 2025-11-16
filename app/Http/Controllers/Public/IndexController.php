<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){

        return view('public.index');
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
}
