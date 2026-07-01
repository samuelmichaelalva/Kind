<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Ngo;
use App\Models\User;
use App\Models\VolunteerOpportunity;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<VolunteerOpportunity>
 */
class VolunteerOpportunityFactory extends Factory
{
    protected $model = VolunteerOpportunity::class;

    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'ngo_id' => Ngo::factory(),
            'category_id' => Category::factory(),
            'title' => fake()->sentence(),
            'description' => fake()->paragraph(),
            'location' => fake()->city(),
            'slots' => fake()->numberBetween(1, 20),
            'starts_on' => now()->addDay(),
            'ends_on' => now()->addDays(7),
            'status' => 'open',
        ];
    }
}
