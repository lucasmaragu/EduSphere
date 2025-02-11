<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    public function run()
    {
        Course::create([
            'name' => 'Fundamentos de Programación en Python',
            'description' => 'Curso introductorio a la programación con Python, ideal para principiantes.',
        ]);

        Course::create([
            'name' => 'Desarrollo Web con HTML, CSS y JavaScript',
            'description' => 'Curso completo sobre desarrollo web, desde la estructura HTML hasta la interactividad con JavaScript.',
        ]);

        Course::create([
            'name' => 'Bases de Datos con MySQL',
            'description' => 'Curso sobre la gestión de bases de datos utilizando MySQL y técnicas de normalización.',
        ]);

        Course::create([
            'name' => 'Programación Orientada a Objetos con Java',
            'description' => 'Curso avanzado sobre programación orientada a objetos utilizando Java, cubriendo conceptos clave como clases, herencia y polimorfismo.',
        ]);
    }
}
