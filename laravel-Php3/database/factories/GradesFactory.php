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
            'clade_id' => $this->faker->randomElement(0,3),
            'deskripsi' => $this->faker->randomElement(0,5),
            'scoring' => $this->faker->numberBetween(0, 100), // Menghasilkan skor antara 0 hingga 100
        ];
    }
}
