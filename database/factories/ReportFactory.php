<?php

namespace Database\Factories;

use App\Models\Report;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Report>
 */
class ReportFactory extends Factory
{
    protected $model = Report::class;

    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'reportable_type' => 'App\\Models\\Post',
            'reportable_id' => 1,
            'reason' => 'spam',
            'details' => fake()->sentence(),
            'resolved' => false,
        ];
    }
}
