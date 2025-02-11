<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Message;

class MessageSeeder extends Seeder
{
    public function run()
    {
        Message::create([
            'sender_id' => 5, // Asegúrate de que el 'sender_id' existe
            'receiver_id' => 2, // Asegúrate de que el 'receiver_id' existe
            'content' => 'Hola, ¿me podrías aclarar algunos puntos sobre la tarea de Python?',
            'is_read' => false,
        ]);

        Message::create([
            'sender_id' => 2, // Asegúrate de que el 'sender_id' existe
            'receiver_id' => 5, // Asegúrate de que el 'receiver_id' existe
            'content' => 'Claro, ¿qué necesitas saber exactamente sobre la tarea?',
            'is_read' => true,
        ]);
    }
}
