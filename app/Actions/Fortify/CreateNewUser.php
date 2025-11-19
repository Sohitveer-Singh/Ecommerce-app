<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use App\Events\UserRegistered;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param array<string, string> $input
     */
    public function create(array $input): User
    {
        // 🧩 Validate all registration inputs
        Validator::make($input, [
            'first_name' => ['required', 'string', 'max:100'],
            'last_name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'phone' => ['required', 'string', 'max:20', 'unique:users,phone'],
            'password' => $this->passwordRules(),
            'sponsor' => ['nullable', 'string', 'max:100'],
        ])->validate();

//        $referredById = null;
//        $sponsorCode  = null;
//
//        // If user entered a sponsor code
//        if (!empty($input['sponsor'])) {
//            $referrer = User::where('ref_code', $input['sponsor'])->first();
//
//            if ($referrer) {
//                $referredById = $referrer->id;
//                $sponsorCode  = $referrer->ref_code;
//            }
//        }
//
//        // Fallback to admin
//        if (is_null($referredById)) {
//            $admin = User::find(1);   // your admin user
//            $referredById = $admin->id;
//            $sponsorCode  = $admin->ref_code;
//        }
//
//        // 🪪 Auto-generate unique 6-digit numeric username
//        do {
//            $username = str_pad(random_int(0, 999999), 6, '0', STR_PAD_LEFT); // e.g. 003842
//        } while (User::where('username', $username)->exists());
//
//        // 🧩 Combine first + last name into full name
//        $name = trim($input['first_name'] . ' ' . $input['last_name']);
//
//        // ✅ Create and return the user record
//        $user =  User::create([
//            'name'           => $name,
//            'first_name'     => $input['first_name'],
//            'last_name'      => $input['last_name'],
//            'username'       => $username,
//            'email'          => $input['email'],
//            'phone'          => $input['phone'],
//            'password'       => Hash::make($input['password']),
//            'sponsor'        => $sponsorCode,
//            'referred_by_id' => $referredById,
//        ]);
//
//        $user->wallet()->create();
//
        return DB::transaction(function () use ($input) {

            $referredById = null;
            $sponsorCode = null;

            // If user entered a sponsor code
            if (!empty($input['sponsor'])) {
                $referrer = User::where('ref_code', $input['sponsor'])->first();

                if ($referrer) {
                    $referredById = $referrer->id;
                    $sponsorCode = $referrer->ref_code;
                }
            }

            // Fallback to admin
            if (is_null($referredById)) {
                $admin = User::find(1);   // your admin user
                $referredById = $admin->id;
                $sponsorCode = $admin->ref_code;
            }

            // 🪪 Auto-generate unique 6-digit numeric username
            do {
                $username = str_pad(random_int(0, 999999), 6, '0', STR_PAD_LEFT); // e.g. 003842
            } while (User::where('username', $username)->exists());

            // 🧩 Combine first + last name into full name
            $name = trim($input['first_name'] . ' ' . $input['last_name']);

            // ✅ Create and return the user record
            $user = User::create([
                'name' => $name,
                'first_name' => $input['first_name'],
                'last_name' => $input['last_name'],
                'username' => $username,
                'email' => $input['email'],
                'phone' => $input['phone'],
                'password' => Hash::make($input['password']),
                'sponsor' => $sponsorCode,
                'referred_by_id' => $referredById,
            ]);

            // 4. ✅ Create Wallet IMMEDIATELY
            $user->wallet()->create();

            event(new UserRegistered($user));

            return $user;

        });
    }
}
