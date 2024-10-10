<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Document>
 */
class DocumentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
         return [
            'amount'=>fake()->numberBetween(100,10000),
            'document_format' => fake()->randomElement(['pdf', 'docx', 'txt']),
            'document_type' => fake()->randomElement(['invoice', 'receipt', 'contract']),
            'name' => fake()->sentence(),
            'bill_type' => fake()->randomElement(['utility', 'purchase', 'other']),
            'file_path' => fake()->filePath(),
            'receipt_id' => fake()->postcode(),
            'created_at' => now(),
            'updated_at' => now(),
            'created_by_id'=>User::factory(),
            'updated_by_id'=>User::factory(),
        ];
    }
}
