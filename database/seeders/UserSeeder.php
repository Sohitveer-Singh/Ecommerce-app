<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          // --- Create Roles ---
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $userRole  = Role::firstOrCreate(['name' => 'user']);

        // --- Create Admin User ---
        $admin = User::firstOrCreate(
            ['email' => 'admin@shopus.com'],
            [
                'first_name' => 'Admin',
                'last_name'  => 'User',
                'name'       => 'Admin User',
                'username'   => '100001',
                'phone'      => '9999999999',
                'ref_code'   => strtoupper(Str::random(8)),
                'password'   => Hash::make('secret'),
            ]
        );
        $admin->assignRole($adminRole);

        // --- Create Regular Users ---
        $staticUsers = [
            [
                'first_name' => 'John',
                'last_name'  => 'Doe',
                'email'      => 'user1@shopus.com',
                'username'   => '100002',
                'phone'      => '9000000001',
            ],
            [
                'first_name' => 'Jane',
                'last_name'  => 'Smith',
                'email'      => 'user2@shopus.com',
                'username'   => '100003',
                'phone'      => '9000000002',
            ],
            [
                'first_name' => 'David',
                'last_name'  => 'Lee',
                'email'      => 'user3@shopus.com',
                'username'   => '100004',
                'phone'      => '9000000003',
            ],
        ];

        $createdUsers = [];

        foreach ($staticUsers as $u) {
            $user = User::firstOrCreate(
                ['email' => $u['email']],
                [
                    'first_name' => $u['first_name'],
                    'last_name'  => $u['last_name'],
                    'name'       => $u['first_name'] . ' ' . $u['last_name'],
                    'username'   => $u['username'],
                    'phone'      => $u['phone'],
                    'ref_code'   => strtoupper(Str::random(8)),
                    'password'   => Hash::make('password'),
                ]
            );
            $user->assignRole($userRole);
            $createdUsers[] = $user;
        }

        // --- Setup Referral Relationships ---
        if (!empty($createdUsers)) {
            // 1️⃣ Admin refers the first user
            $firstUser = $createdUsers[0];
            $firstUser->update([
                'referred_by_id' => $admin->id,
                'sponsor'        => $admin->ref_code,
            ]);

            // 2️⃣ The first user refers all others
            foreach (array_slice($createdUsers, 1) as $u) {
                $u->update([
                    'referred_by_id' => $firstUser->id,
                    'sponsor'        => $firstUser->ref_code,
                ]);
            }
        }
    }
}
