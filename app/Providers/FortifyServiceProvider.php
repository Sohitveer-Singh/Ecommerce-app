<?php

namespace App\Providers;

use App\Actions\Fortify\CreateNewUser;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use App\Actions\Fortify\UpdateUserProfileInformation;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
use Laravel\Fortify\Actions\RedirectIfTwoFactorAuthenticatable;
use Laravel\Fortify\Fortify;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class FortifyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Fortify::createUsersUsing(CreateNewUser::class);
        Fortify::updateUserProfileInformationUsing(UpdateUserProfileInformation::class);
        Fortify::updateUserPasswordsUsing(UpdateUserPassword::class);
        Fortify::resetUserPasswordsUsing(ResetUserPassword::class);
        Fortify::redirectUserForTwoFactorAuthenticationUsing(RedirectIfTwoFactorAuthenticatable::class);

        RateLimiter::for('login', function (Request $request) {
            $throttleKey = Str::transliterate(Str::lower($request->input(Fortify::username())).'|'.$request->ip());

            return Limit::perMinute(5)->by($throttleKey);
        });

        // Login View: Check Route Name 'vendor.login'
        Fortify::loginView(function (Request $request) {
            if ($request->routeIs('vendor.login')) {
                return view('auth.vendor.login');
            }
            return view('auth.login');
        });

        // Register View: Check Route Name 'vendor.register'
        Fortify::registerView(function (Request $request) {
            if ($request->routeIs('vendor.register')) {
                return view('auth.vendor.register');
            }
            return view('auth.register');
        });

        Fortify::authenticateUsing(function (Request $request) {
            $user = User::where('email', $request->email)->first();

            // 1. Check Credentials first
            if ($user && Hash::check($request->password, $user->password)) {

                // 2. Scenario: User is on VENDOR Login Page
                if ($request->routeIs('vendor.login.store')) {
                    if (! $user->hasRole('vendor') && ! $user->hasRole('admin')) {
                        // ❌ Stop them and show specific error
                        throw ValidationException::withMessages([
                            'email' => [
                                'You are a Customer account. Please login at the main website.'
                            ],
                        ]);
                    }
                    return $user;
                }

                // 3. Scenario: User is on CUSTOMER Login Page
                // (We assume this is the fallback/standard login route)

                // Check if it's a vendor trying to login as a customer
                if ($user->hasRole('vendor') && ! $user->hasRole('admin')) {
                    // ❌ Stop them and show specific error
                    throw ValidationException::withMessages([
                        'email' => [
                            'You are a Vendor. Please login at the Vendor Portal.'
                        ],
                    ]);
                }

                // If we get here, it's a regular user on the regular page
                return $user;
            }

            // If password doesn't match or user not found, return null.
            // This triggers the default "These credentials do not match our records."
            return null;
        });

//        Fortify::authenticateUsing(function (Request $request) {
//            // 1. Find User
//            $user = User::where('email', $request->email)->first();
//
//            // 2. Validate Password
//            if ($user && Hash::check($request->password, $user->password)) {
//
//                // 3. STRICT ENFORCEMENT: Check Route vs Role
//
//                // Scenario A: User is on Vendor Login Page
//                if ($request->routeIs('vendor.login.store')) {
//                    if (! $user->hasRole('vendor')) {
//                        // Fail: Customer tried to login on Vendor page
//                        return null;
//                    }
//                }
//                // Scenario B: User is on Standard Login Page
//                // (Assuming standard route is named 'login' or matches default)
//                elseif ($user->hasRole('vendor')) {
//                    // Fail: Vendor tried to login on Customer page
//                    return null;
//                }
//
//                // Pass: Credentials are good and Role matches the Page
//                return $user;
//            }
//        });

        RateLimiter::for('two-factor', function (Request $request) {
            return Limit::perMinute(5)->by($request->session()->get('login.id'));
        });
    }
}
