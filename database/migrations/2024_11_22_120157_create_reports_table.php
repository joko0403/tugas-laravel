<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->foreignId('student_id')->constrained('students')->onDelete('cascade'); // Foreign Key to students
            $table->decimal('average_score', 5, 2); // Average Score
            $table->decimal('attendance', 5, 2); // Attendance Percentage
            $table->text('notes')->nullable(); // Teacher Notes
            $table->timestamps(); // created_at & updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('reports');
    }
}
