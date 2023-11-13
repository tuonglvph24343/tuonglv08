<?php

namespace Database\Factories;

use App\Models\Production;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Production>
 */
class ProductionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $active = collect([
            Production::ACTIVE,
            Production::INACTIVE,
        ])->random(1)[0];
        return [
            'Thumbnail' => fake()->imageUrl,
            'Name'=> fake()->text(5),
            'PriceSale'=> fake()->intval,
            'Price'=> fake()->intval,
            'Status' => $active,
        ];
    }
}
