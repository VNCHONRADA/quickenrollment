<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('students', function (Blueprint $table) {
            $table->string('ID_No')->change();
            $table->string('Mobile_No')->nullable()->change();
            $table->string('Father_Contact')->nullable()->change();
            $table->string('Mother_Contact')->nullable()->change();
            $table->string('Guardian_Contact')->nullable()->change();
        });
    }

    public function down(): void
    {
        Schema::table('students', function (Blueprint $table) {
            $table->integer('Guardian_Contact')->nullable()->default(null)->change();
            $table->integer('Mother_Contact')->nullable()->default(null)->change();
            $table->integer('Father_Contact')->nullable()->default(null)->change();
            $table->integer('Mobile_No')->nullable()->default(null)->change();
            $table->integer('ID_No')->default(null)->change();
        });
    }
};

