<?php

namespace Database\Factories;

use App\Models\Ngo;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Ngo>
 */
class NgoFactory extends Factory
{
    protected $model = Ngo::class;

    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'name' => fake()->company(),
            'slug' => fake()->unique()->slug(),
            'email' => fake()->unique()->safeEmail(),
            'phone' => fake()->phoneNumber(),
            'website' => fake()->url(),
            'location' => fake()->city(),
            'description' => fake()->paragraph(),
            'mission' => fake()->sentence(),
            'status' => 'active',
        ];
    }
}
