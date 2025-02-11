<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Assignment;
use Illuminate\Support\Carbon;

class AssignmentSeeder extends Seeder
{
    public function run()
    {
        Assignment::create([
            'title' => 'Tarea de Introducción a la Programación',
            'description' => 'Primera tarea sobre fundamentos de programación en Python.',
            'due_date' => Carbon::now()->addDays(7),
            'subject_id' => 1, // Asegúrate de que el 'subject_id' existe
        ]);

        Assignment::create([
            'title' => 'Tarea de Desarrollo Web',
            'description' => 'Tarea sobre creación de una página web estática utilizando HTML y CSS.',
            'due_date' => Carbon::now()->addDays(10),
            'subject_id' => 1, // Asegúrate de que el 'subject_id' existe
        ]);
    }
}
