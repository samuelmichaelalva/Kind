<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Ngo;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Post>
 */
class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'ngo_id' => Ngo::factory(),
            'category_id' => Category::factory(),
            'title' => fake()->sentence(),
            'body' => fake()->paragraph(),
            'type' => 'request',
            'status' => 'published',
            'location' => fake()->city(),
            'featured' => false,
        ];
    }
}
