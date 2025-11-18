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
//        $categories = [
//            'Restaurants',
//            'Hotels',
//            'Shopping',
//            'Services',
//            'Health & Medical',
//            'Automotive',
//        ];
//
//        foreach ($categories as $category) {
//            ListingCategory::firstOrCreate(
//                ['name' => $category],
//                [
//                     'slug'   => Str::slug($category),
//                    'status' => true,
//                    'image'  => 'category_images/default.png' // Placeholder path
//                ]
//            );
//        }

        $categories = [
            [
                'name' => 'Dresses',
                'image' => 'assets/images/homepage-one/category-img/dresses.webp'
            ],
            [
                'name' => 'Leather Bags',
                'image' => 'assets/images/homepage-one/category-img/bags.webp'
            ],
            [
                'name' => 'Sweaters',
                'image' => 'assets/images/homepage-one/category-img/sweaters.webp'
            ],
            [
                'name' => 'Boots',
                'image' => 'assets/images/homepage-one/category-img/shoes.webp'
            ],
            [
                'name' => 'Gift for Him',
                'image' => 'assets/images/homepage-one/category-img/gift.webp'
            ],
            [
                'name' => 'Sneakers',
                'image' => 'assets/images/homepage-one/category-img/sneakers.webp'
            ],
            [
                'name' => 'Watch',
                'image' => 'assets/images/homepage-one/category-img/watch.webp'
            ],
            [
                'name' => 'Gold Rings',
                'image' => 'assets/images/homepage-one/category-img/ring.webp'
            ],
            [
                'name' => 'Cap',
                'image' => 'assets/images/homepage-one/category-img/cap.webp'
            ],
            [
                'name' => 'Sunglass',
                'image' => 'assets/images/homepage-one/category-img/glass.webp'
            ],
            [
                'name' => 'Baby Shop',
                'image' => 'assets/images/homepage-one/category-img/baby.webp'
            ],
            // Note: Your HTML included "Leather Bags" twice.
            // firstOrCreate() will correctly handle this by only inserting it once.
        ];

        // Loop through the new array and create records
        foreach ($categories as $categoryData) {
            ListingCategory::firstOrCreate(
                ['name' => $categoryData['name']], // Check if it exists by name
                [
                    'slug'   => Str::slug($categoryData['name']),
                    'status' => true,
                    'image'  => $categoryData['image'] // Use the specific image path
                ]
            );
        }
    }
}
