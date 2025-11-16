<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ListingLocation;
use App\Models\ListingTiming;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{

private static $imageUrls = [
    // "https://images.unsplash.com/photo-1556761175-5973dc0f32e7", // Team meeting
    // "https://images.unsplash.com/photo-1521791136064-7986c2920216", // Office workspace
    // "https://images.unsplash.com/photo-1498050108023-c5249f4df085", // Developer desk
    // "https://images.unsplash.com/photo-1492724441997-5dc865305da7", // Business planning
    // "https://images.unsplash.com/photo-1515378791036-0648a3ef77b2", // Laptop + coffee
    // "https://images.unsplash.com/photo-1554384645-13eab165c24b",   // Startup team
    // "https://images.unsplash.com/photo-1504384308090-c894fdcc538d", // Corporate boardroom
    // "https://images.unsplash.com/photo-1497366216548-37526070297c", // Office collaboration
    // "https://images.unsplash.com/photo-1520607162513-77705c0f0d4a", // Writing notes
    // "https://images.unsplash.com/photo-1523952578875-e6bbd3c1df49", // Business presentation
    // "https://images.unsplash.com/photo-1519389950473-47ba0277781c", // Startup brainstorming
    // "https://images.unsplash.com/photo-1485827404703-89b55fcc595e", // Business desk flatlay
     "https://images.unsplash.com/photo-1556761175-5973dc0f32e7", // Team meeting
    "https://images.unsplash.com/photo-1498050108023-c5249f4df085", // Laptop workspace
    "https://images.unsplash.com/photo-1521791136064-7986c2920216", // Modern office
    "https://images.unsplash.com/photo-1497366216548-37526070297c", // Office teamwork
    "https://images.unsplash.com/photo-1519389950473-47ba0277781c", // Startup brainstorming
    "https://images.unsplash.com/photo-1554384645-13eab165c24b",   // Small business team

];

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
   public function definition(): array
    {
        return [
            // We set user_id and category_id in the seeder
            'name'           => fake()->company(),
            'contact_person' => fake()->name(),
            'mobile'         => fake()->phoneNumber(),
            'whatsapp_no'    => fake()->phoneNumber(),
            'email'          => fake()->unique()->companyEmail(),
            'description'    => fake()->paragraph(3),
            // 'thumbnail'      => 'thumbnails/default.jpg', // Placeholder
            'thumbnail'      => fake()->randomElement(self::$imageUrls),
            'status'         => 1,
            'listing_step'   => 0, // 0 = Completed
            'is_featured'    => fake()->boolean(20), // 20% chance of being featured
            'gst_number'     => fake()->bothify('##AAAAA####A#Z#'),
            'created_by'     => '100001', // Default to admin
        ];
    }

    /**
     * Configure the model factory.
     */
    public function configure(): static
    {
        return $this->afterCreating(function ($listing) {
            // 1. Create one related location
            ListingLocation::factory()->create([
                'listing_id' => $listing->id,
            ]);

            // 2. Create 7 days of timings
            $days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
            foreach ($days as $day) {
                ListingTiming::factory()->create([
                    'listing_id' => $listing->id,
                    'day'        => $day,
                    'is_closed'  => ($day === 'Sunday'), // Make Sunday closed
                    'open_time'  => '09:00',
                    'close_time' => '17:00',
                ]);
            }
        });
    }
}
