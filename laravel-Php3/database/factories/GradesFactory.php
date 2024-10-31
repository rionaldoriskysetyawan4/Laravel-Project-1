<?php

namespace Database\Factories;

use App\Models\Grades;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Grades>
 */
class GradesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'class_id' => $this->faker->randomElement(['10A', '10B', '10C']), // Menghasilkan kelas acak
            'scoring' => $this->faker->numberBetween(0, 100), // Menghasilkan skor antara 0 hingga 100
        ];
    }
}
