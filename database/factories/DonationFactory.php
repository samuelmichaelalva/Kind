<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Donation;
use App\Models\Ngo;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Donation>
 */
class DonationFactory extends Factory
{
    protected $model = Donation::class;

    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'ngo_id' => Ngo::factory(),
            'category_id' => Category::factory(),
            'title' => fake()->sentence(),
            'description' => fake()->paragraph(),
            'amount' => fake()->randomFloat(2, 10, 500),
            'currency' => 'USD',
            'status' => 'open',
            'location' => fake()->city(),
        ];
    }
}
