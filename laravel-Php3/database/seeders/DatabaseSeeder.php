<?php
namespace Database\Seeders;

use App\Models\Students;
use App\Models\Grades;
use App\Models\Department;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Seed the Grades table
        // $grades = ['10', '11', '12'];
        // foreach ($grades as $grade) {
        //     Grades::create([
        //         'clade_id' => $grade,
        //         'scoring' => 0,
        //         'deskripsi' =>  $grade, // Provide a default description or customize as needed
        //     ]);
            
        // }

        // Seed Department classes
        $departmentClasses = [
            'PPLG' => ['PPLG'],
            'ANIMASI' => ['ANIMASI 3D', 'ANIMASI 2D'],
            'DKV' => ['Desain', 'Teknik'],
        ];

        foreach ($departmentClasses as $department => $classes) {
            foreach ($classes as $class) {
                // Determine subclass ranges based on the department and class
                $subclassRange = match ([$department, $class]) {
                    ['PPLG', 'PPLG'] => 2,
                    ['ANIMASI', 'ANIMASI 3D'] => 3,
                    ['ANIMASI', 'ANIMASI 2D'] => [4, 5],
                    ['DKV', 'Desain'] => 2,
                    ['DKV', 'Teknik'] => [3, 5],
                    default => 1,
                };

                // Loop through grades 10, 11, and 12 to create departments
                for ($grade = 10; $grade <= 12; $grade++) {
                    $startSubclass = is_array($subclassRange) ? $subclassRange[0] : 1;
                    $endSubclass = is_array($subclassRange) ? $subclassRange[1] : $subclassRange;

                    for ($subclass = $startSubclass; $subclass <= $endSubclass; $subclass++) {
                        // Create department entries
                        Department::create([
                            'department_id' => $department, // Department name (e.g., 'PPLG')
                            'clade_id' => $class,           // Class name (e.g., 'PPLG')
                            'deskripsi' => "{$grade} $class $subclass", // Description based on grade and class
                        ]);
                    }
                }
            }
        }

        // Generate 100 students and associate them with grades and departments
        Students::factory()->count(100)->create();  // Ensure the factory is correctly set up for students
    }
}
