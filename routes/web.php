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

});

//
require __DIR__.'/admin.php';
require __DIR__.'/agent.php';
require __DIR__.'/user.php';

