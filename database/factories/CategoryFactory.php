<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $is_active = collect([
            Category::VALUE_FACTORY,
            Category::VALUE_FACTORYS
        ])->random(1)[0];
        return [
            'name'=> fake()->text(10),
            'excerpt'=> fake()->text(70),
            'is_active'=> $is_active,
        ];
    }
}
