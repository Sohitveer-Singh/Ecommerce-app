<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ListingTag;
use Illuminate\Support\Str;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            'Free WiFi',
            'Parking Available',
            'Accepts Credit Cards',
            'Pet Friendly',
            '24/7 Open',
            'Outdoor Seating',
            'Takeaway',
        ];

        foreach ($tags as $tag) {
            ListingTag::firstOrCreate(
                ['name' => $tag],
                [
                    'slug'   => Str::slug($tag),
                    'status' => true,
                ]
            );
        }
    }
}
