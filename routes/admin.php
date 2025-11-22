<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\ListingController as AdminListingController;


Route::middleware(['auth','role:admin'])->prefix('admin')->as('admin.')->group(function(){


//    Route::middleware('auth')->group(function () {
        Route::resource('tags', TagController::class);
//    });


    Route::controller(AdminDashboardController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('dashboard');

    });

    Route::controller(AdminListingController::class)->prefix('listing')->as('listing.')->group(function () {
        Route::get('/', 'index')->name('index');

    });

//    Route::middleware('auth')->group(function () {
        Route::resource('category', CategoryController::class);
//    });

});
