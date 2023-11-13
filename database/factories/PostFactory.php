<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $status = collect([
           Post::STATUS_PUBLISHED,
           Post::STATUS_DRAFT
        ])->random(1)[0];
     
        return [
            'title' => fake()->text(70),
            'img'=> fake()->imageUrl,
            'description'=> fake()->text,
            'status' => $status,
        ];
    }
}
