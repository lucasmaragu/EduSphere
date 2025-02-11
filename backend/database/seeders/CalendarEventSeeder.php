<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CalendarEvent;
use Illuminate\Support\Carbon;

class CalendarEventSeeder extends Seeder
{
    public function run()
    {
        CalendarEvent::create([
            'title' => 'Examen Final de Programación en Python',
            'description' => 'Examen final del curso de Python, cubriendo todos los temas vistos durante el curso.',
            'start' => Carbon::now()->addDays(20),
            'end' => Carbon::now()->addDays(20)->addHours(2),
            'user_id' => 1, // Asegúrate de que el 'user_id' existe
        ]);

        CalendarEvent::create([
            'title' => 'Entrega de Proyecto Final de Desarrollo Web',
            'description' => 'Entrega del proyecto final donde los estudiantes deberán crear una página web completa.',
            'start' => Carbon::now()->addDays(25),
            'end' => Carbon::now()->addDays(25)->addHours(3),
            'user_id' => 2, // Asegúrate de que el 'user_id' existe
        ]);
    }
}
