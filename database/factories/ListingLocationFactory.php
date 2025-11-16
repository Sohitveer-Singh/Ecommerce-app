<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ListingLocation>
 */
class ListingLocationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'latitude'   => fake()->latitude(30.6, 30.8), // Latitudes for Chandigarh area
            'longitude'  => fake()->longitude(76.7, 76.9), // Longitudes for Chandigarh area
            'address'    => fake()->streetAddress(),
            'pincode'    => fake()->numerify('######'), // Was fake()->postcode()
            'city'       => fake()->city(),
            'state'      => fake()->state(),
        ];
    }
}
