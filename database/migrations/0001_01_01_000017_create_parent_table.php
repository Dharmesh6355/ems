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
        Schema::create('parent', function (Blueprint $table) {
            $table->id('parent_id')->unsigned();
            $table->string('parent_name',100);
            $table->string('contact_number',15);
            $table->string('parent_email',100);
            $table->text('address');
            $table->string('relationship_to_student',50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parent');
    }
};
