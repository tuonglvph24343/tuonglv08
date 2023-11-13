<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $active = collect([
            Student::ACTIVE,
            Student::INACTIVE,
        ])->random(1)[0];
        return [
            'TenLop' => fake()->text(5),
            'TenSinhVien' => fake()->text(10),
            'Anh' => fake()->imageUrl,
            'Is_Active' => $active,
            'ChuThich' => fake()->text,
        ];
    }
}
