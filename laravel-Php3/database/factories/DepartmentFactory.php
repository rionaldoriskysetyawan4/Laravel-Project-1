<?php

namespace Database\Factories;

use App\Models\Departments;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Department>
 */
class DepartmentFactory extends Factory
{


    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'clade_id' => $this->faker->randomElement(['PPLG', 'ANIMASI', 'DKV']),
            'deskripsi' => $this->faker->randomElement(['PPLG', 'ANIM 2D', 'ANIM 3D', 'DG', 'TG']),

        ];
    }
}
