<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ListingCategory;
use Illuminate\Support\Str;
class ListingCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Restaurants',
            'Hotels',
            'Shopping',
            'Services',
            'Health & Medical',
            'Automotive',
        ];

        foreach ($categories as $category) {
            ListingCategory::firstOrCreate(
                ['name' => $category],
                [
                     'slug'   => Str::slug($category),
                    'status' => true,
                    'image'  => 'category_images/default.png' // Placeholder path
                ]
            );
        }
    }
}
