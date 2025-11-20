<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Public\IndexController;



Route::get('/', function () {
    return view('welcome');
});

Route::controller(IndexController::class)->as('public.')->group(function () {

    Route::get('/index', 'index')->name('index');
    Route::get('/memberships', 'viewMemberships')->name('memberships');
    Route::get('/about-us', 'aboutUs')->name('about-us');
    Route::get('/privacy-policy', 'privacyPolicy')->name('privacy-policy');

    Route::get('/listing/{listing}/details', 'listingDetails')->name('listing-details');

    Route::get('/listing/tag/{tag:name}', 'listingByTag')->name('listings.by_tag');
    Route::get('/listing/category/{category:name}', 'listingByCategory')->name('listings.by_category');
    Route::get('/listing/user/{user:name}', 'listingByUser')->name('listings.by_user');

    Route::get('/listing/categories', 'listingCategories')->name('listings.categories');

    Route::get('/all-listing','allListings')->name('listings.all');


});

require __DIR__ . '/vendor.php';
require __DIR__.'/admin.php';
//require __DIR__.'/agent.php';
require __DIR__.'/user.php';

