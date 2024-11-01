<?php

namespace Database\Factories;

use App\Models\Other;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JobListing>
 */
class JobListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fkOther' => Other::factory(),
            'title' => fake()->title(),
            'salary' => fake()->randomNumber()
        ];
    }
}
