<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            UserSeeder::class,            // 1. Create Users
            ListingCategorySeeder::class, // 2. Create Categories
            TagSeeder::class,             // 3. Create Tags
            ListingSeeder::class,         // 4. Create Listings (which use all of the above)
        ]);
    }
}
