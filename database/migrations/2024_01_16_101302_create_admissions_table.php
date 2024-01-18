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
        Schema::create('admissions', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('mother_name');
            $table->string('last_name');
            $table->string('mobile');
            $table->string('email');
            $table->string('nationality');
            $table->string('date_of_birth');
            $table->enum('gender',['male','female', 'other']);
            $table->enum('marital_status',['married','unmarried']);
            $table->string('aadhar_number');
            $table->string('category');
            $table->string('course');
            $table->text('address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admissions');
    }
};
