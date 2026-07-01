<?php

namespace Database\Factories;

use App\Models\NotificationModel;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<NotificationModel>
 */
class NotificationFactory extends Factory
{
    protected $model = NotificationModel::class;

    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'type' => 'info',
            'notifiable_type' => 'App\\Models\\Post',
            'notifiable_id' => 1,
            'title' => fake()->sentence(),
            'message' => fake()->sentence(),
            'data' => ['foo' => 'bar'],
        ];
    }
}
