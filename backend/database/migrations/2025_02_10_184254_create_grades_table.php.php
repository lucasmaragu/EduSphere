<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grades', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Relates to the user (student or teacher)
            $table->foreignId('assignment_id')->constrained('assignments')->onDelete('cascade'); // Relates to the assignment
            $table->decimal('grade', 5, 2); // The grade (numeric value with 2 decimal places)
            $table->text('comments')->nullable(); // Optional comments for the grade
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grades');
    }
}
