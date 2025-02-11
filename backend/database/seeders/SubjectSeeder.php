<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Seeder;
use App\Models\Course;
use App\Models\Teacher;

class SubjectSeeder extends Seeder
{
    public function run()
    {
        // Asegúrate de que los cursos y los profesores existen
        $course = Course::first();  // Obtener el primer curso o usa un ID específico
     

        Subject::create([
            'name' => 'Introducción a la Programación',
            'course_id' => $course->id,  // Usar el ID del curso
            'teacher_id' => 1, // Usar el ID del profesor
        ]);
    }
}
