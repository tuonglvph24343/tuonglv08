<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Customer' => fake()->text(5),
            'Mail' => fake()->text(10),
            'Phone'=> fake()->text(11),
            'Country'=> fake()->text(10),
            'TotalOrder' => fake()->text(5),
        ];
    }
}
