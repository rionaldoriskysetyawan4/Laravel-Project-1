<?php

namespace Database\Factories;

use App\Models\Students;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentsFactory extends Factory
{
    protected $model = Students::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(), // Menghasilkan nama
            'email' => $this->faker->unique()->safeEmail(), // Menghasilkan email unik
            'email_verified_at' => now(), // Mengatur tanggal verifikasi email
            'class_id' => $this->faker->numberBetween(1,3),
            'address' => $this->faker->address(), // Menghasilkan alamat
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
