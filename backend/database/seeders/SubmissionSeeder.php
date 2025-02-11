<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Submission;
use Illuminate\Support\Carbon;

class SubmissionSeeder extends Seeder
{
    public function run()
    {
        Submission::create([
            'user_id' => 1, // Asegúrate de que el 'user_id' existe
            'assignment_id' => 2, // Asegúrate de que el 'assignment_id' existe
            'submitted_at' => Carbon::now(),
            'grade' => 90,
        ]);

        Submission::create([
            'user_id' => 2, // Asegúrate de que el 'user_id' existe
            'assignment_id' => 2, // Asegúrate de que el 'assignment_id' existe
            'submitted_at' => Carbon::now(),
            'grade' => 85,
        ]);
    }
}
