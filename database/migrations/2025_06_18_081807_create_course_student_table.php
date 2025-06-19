<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up(): void
{
    Schema::create('course_student', function (Blueprint $table) {
        $table->unsignedBigInteger('course_id');
        $table->unsignedBigInteger('student_id');

        $table->foreign('course_id')->references('CourseID')->on('course')->onDelete('cascade');
        $table->foreign('student_id')->references('StudentID')->on('student')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_student');
    }
};
