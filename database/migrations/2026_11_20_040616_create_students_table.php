<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // New table
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->integer('ID_No')->unique();
            $table->text('Last_Name');
            $table->text('First_Name');
            $table->text('Middle_Name');
            $table->string('Suffix_Or_Prefix')->nullable();
            $table->text('Course');
            $table->string('Year_Level');
            $table->string('Curriculum')->nullable();
            $table->date('Date_Graduated')->nullable();
            $table->text('Age');
            $table->text('Gender');
            $table->date('Birth_Date');
            $table->string('Birth_Place');
            $table->text('Nationality')->nullable();
            $table->text('Civil_Status');
            $table->string('Elementary_School')->nullable();
            $table->string('Junior_High_School')->nullable();
            $table->string('Senior_High_School')->nullable();
            $table->string('ALS_School')->nullable();
            $table->string('School_Last_Attended')->nullable();
            $table->string('Present_Address');
            $table->string('Permanent_Address');
            $table->integer('Mobile_No')->nullable();
            $table->string('Email')->nullable();
            $table->string('Father_Name')->nullable();
            $table->integer('Father')->nullable();
            $table->integer('Father_Contact');
            $table->string('Mother')->nullable();
            $table->integer('Mother_Contact')->nullable();
            $table->string('Guardian')->nullable();
            $table->integer('Guardian_Contact')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};