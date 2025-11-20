<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\ListingController;
use App\Http\Controllers\User\CardController;
use App\Http\Controllers\User\WalletController;
use App\Http\Controllers\User\ProfileController;

Route::middleware(['auth'])->prefix('user')->as('user.')->group(function(){

    Route::controller(DashboardController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('dashboard');

    });

    Route::controller(WalletController::class)->prefix('wallet')->as('wallet.')->group(function () {
        Route::get('/', 'index')->name('index');

    });

    Route::controller(ProfileController::class)->prefix('profile')->as('profile.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::put('/update', 'update')->name('update');
        Route::put('/update-financials', 'updateFinancials')->name('update-financials');
        Route::put('/update-firm', 'updateFirmDetails')->name('update-firm');


    });

    Route::middleware('auth')->group(function () {
        Route::resource('card', CardController::class);
    });

//    Route::controller(ListingController::class)->prefix('listing')->as('listing.')->group(function () {
//
//        Route::get('/index', 'index')->name('index');
//        Route::get('/{listing}/edit', 'edit')->name('edit');
//
//        Route::get('/{listing}/resume','resumeListing')->name('resume');
//
//
//        Route::get('/basic-details', 'create')->name('basic-details');
//        Route::post('/basic-details', 'store')->name('basic-details.store');
//        Route::get('/basic-details/{listing}/edit', 'editDetails')->name('basic-details.edit');
//        Route::put('/basic-details/{listing}', 'updateDetails')->name('basic-details.update');
//
//        Route::get('{listing}/address', 'createAddress')->name('address');
//        Route::post('{listing}/address', 'storeAddress')->name('address.store');
//        Route::get('/address/{listing}/edit', 'editAddress')->name('address.edit');
//        Route::put('/address/{listing}', 'updateAddress')->name('address.update');
//
//
//        Route::get('{listing}/timing', 'createTiming')->name('timing');
//        Route::post('{listing}/timing', 'storeTiming')->name('timing.store');
//        Route::get('/timing/{listing}/edit', 'editTiming')->name('timing.edit');
//        Route::put('/timing/{listing}', 'updateTiming')->name('timing.update');
//
//
//        Route::get('{listing}/amenities', 'createAmenities')->name('amenities');
//        Route::post('{listing}/amenities', 'storeAmenities')->name('amenities.store');
//        Route::get('/amenities/{listing}/edit', 'editAmenities')->name('amenities.edit');
//        Route::put('/amenities/{listing}', 'updateAmenities')->name('amenities.update');
//
//        Route::get('{listing}/logo', 'createLogo')->name('logo');
//        Route::post('{listing}/logo', 'storeLogo')->name('logo.store');
//
//
//    });

});


