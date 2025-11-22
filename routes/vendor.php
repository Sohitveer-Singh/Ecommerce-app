<?php
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Controllers\RegisteredUserController;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\Vendor\DashboardController as VendorDashboardController;
use App\Http\Controllers\Vendor\ProfileController as VendorProfileController;
use App\Http\Controllers\Vendor\WalletController as VendorWalletController;
use App\Http\Controllers\Vendor\CardController as VendorCardController;
use App\Http\Controllers\Vendor\ListingController as VendorListingController;
use App\Http\Controllers\Vendor\ProductController;

Route::prefix('vendor')->name('vendor.')->group(function () {

    // Login View (GET) -> Name: vendor.login
    Route::get('/login', [AuthenticatedSessionController::class, 'create'])
        ->middleware('guest')
        ->name('login');

    Route::post('/login', [AuthenticatedSessionController::class, 'store'])
        ->middleware(['guest', 'throttle:login'])
        ->name('login.store');

    // Register View (GET) -> Name: vendor.register
    Route::get('/register', [RegisteredUserController::class, 'create'])
        ->middleware('guest')
        ->name('register');

    // Register Action (POST) -> Name: vendor.register.store
    // WARNING: This name 'vendor.register.store' is hardcoded in CreateNewUser.php
    Route::post('/register', [RegisteredUserController::class, 'store'])
        ->middleware('guest')
        ->name('register.store');
});

Route::middleware(['auth','role:vendor|admin',])->prefix('vendor')->name('vendor.')->group(function () {
    Route::controller(VendorDashboardController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('dashboard');

    });

    Route::controller(VendorWalletController::class)->prefix('wallet')->as('wallet.')->group(function () {
        Route::get('/', 'index')->name('index');

    });

    Route::controller(VendorProfileController::class)->prefix('profile')->as('profile.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::put('/update', 'update')->name('update');
        Route::put('/update-financials', 'updateFinancials')->name('update-financials');
        Route::put('/update-firm', 'updateFirmDetails')->name('update-firm');
    });

    Route::middleware('auth')->group(function () {
        Route::resource('card', VendorCardController::class);
    });

    Route::controller(ProductController::class)
        ->prefix('listing/{listing}/product')
        ->as('listing.product.')
        ->group(function () {

            // Show all products under a listing
            Route::get('/', 'index')->name('index');

//            // Add product (form + submit)
//            Route::get('/add', 'create')->name('create');
            Route::post('/add', 'store')->name('store');

            // Edit product
            Route::get('{product}/edit', 'edit')->name('edit');
            Route::put('{product}', 'update')->name('update');

            // Delete product
            Route::delete('{product}', 'destroy')->name('destroy');
        });


    Route::controller(VendorListingController::class)->prefix('listing')->as('listing.')->group(function () {

        Route::get('/index', 'index')->name('index');
        Route::get('/{listing}/edit', 'edit')->name('edit');

        Route::get('/{listing}/resume','resumeListing')->name('resume');


        Route::get('/basic-details', 'create')->name('basic-details');
        Route::post('/basic-details', 'store')->name('basic-details.store');
        Route::get('/basic-details/{listing}/edit', 'editDetails')->name('basic-details.edit');
        Route::put('/basic-details/{listing}', 'updateDetails')->name('basic-details.update');

        Route::get('{listing}/address', 'createAddress')->name('address');
        Route::post('{listing}/address', 'storeAddress')->name('address.store');
        Route::get('/address/{listing}/edit', 'editAddress')->name('address.edit');
        Route::put('/address/{listing}', 'updateAddress')->name('address.update');


        Route::get('{listing}/timing', 'createTiming')->name('timing');
        Route::post('{listing}/timing', 'storeTiming')->name('timing.store');
        Route::get('/timing/{listing}/edit', 'editTiming')->name('timing.edit');
        Route::put('/timing/{listing}', 'updateTiming')->name('timing.update');


        Route::get('{listing}/amenities', 'createAmenities')->name('amenities');
        Route::post('{listing}/amenities', 'storeAmenities')->name('amenities.store');
        Route::get('/amenities/{listing}/edit', 'editAmenities')->name('amenities.edit');
        Route::put('/amenities/{listing}', 'updateAmenities')->name('amenities.update');

        Route::get('{listing}/logo', 'createLogo')->name('logo');
        Route::post('{listing}/logo', 'storeLogo')->name('logo.store');


    });
});


