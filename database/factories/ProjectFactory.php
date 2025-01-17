<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use app\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake()->sentence(),
            'description'=>fake()->realText(),
            'due_date'=>fake()->dateTimeBetween('now','+1 year'),
            'status'=>fake()->randomElement(['pending','in_progress','complete']),
            'image'=>fake()->imageUrl(),
            'created_by'=>User::factory(),
            'updated_by'=>User::factory(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
