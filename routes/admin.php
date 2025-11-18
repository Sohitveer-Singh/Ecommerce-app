<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\CategoryController;


Route::middleware(['auth','role:admin'])->prefix('admin')->as('admin.')->group(function(){


    Route::middleware('auth')->group(function () {
        Route::resource('tags', TagController::class);
    });

    Route::middleware('auth')->group(function () {
        Route::resource('category', CategoryController::class);
    });

});
