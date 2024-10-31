<?php

namespace Database\Seeders;

use App\Models\Students;
use App\Models\Grades;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $grades = [
            '10A',
            '10B',
            '10C'
        ];

        foreach ($grades as $grade) {
            Grades::create([
                'class_id' => $grade,
                'scoring' => 0
            ]);
        }

        // Menghasilkan 10 data mahasiswa dan menghubungkan dengan grade acak
        Students::factory()->count(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
