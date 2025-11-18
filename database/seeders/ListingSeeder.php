<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\ListingCategory;
use App\Models\ListingTag;
use App\Models\Listing;

class ListingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       // 1. Get all the "parent" IDs we need
        $userIds = User::pluck('id');
        $categoryIds = ListingCategory::pluck('id');
        $tagIds = ListingTag::pluck('id');

        // Safety check:
        if ($userIds->isEmpty() || $categoryIds->isEmpty()) {
            $this->command->error('Please run UserSeeder and ListingCategorySeeder first!');
            return;
        }

        // 2. Loop 50 times (or as many as you want)
        foreach (range(1, 12) as $index) {

            // 3. Get a random user for this new listing
            $randomUser = User::find($userIds->random());

            // 4. Create one listing, passing the required IDs
            //    This is where we fix the error.
            $listing = Listing::factory()->create([
                'user_id'     => $randomUser->id,
                'category_id' => $categoryIds->random(),
                'created_by_user_id'  => $randomUser->id,

            ]);

            // 5. Attach 1 to 3 random tags (this part was correct)
            $listing->tags()->attach(
                $tagIds->random(rand(1, 3))
            );
        }

    }
}
