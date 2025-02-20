<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Student;
use App\Http\Controllers\StudentController;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('student', function (Blueprint $table) {
            $table->id('student_id');
            $table->string('student_name', 255);
            $table->date('dob');
            $table->string('gender', 10);
            $table->string('address', 255);
            $table->string('parent_guardian_contact_info', 255);
            $table->string('other_contact', 255);
            $table->string('email_address', 255);
            $table->timestamps();


            $table->unsignedBigInteger('class_id'); // Assuming class_id is a foreign key
            // Add any other columns you need

            // Define foreign key constraint (if applicable)
            $table->foreign('class_id')->references('class_id')->on('class')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student');
    }
};
