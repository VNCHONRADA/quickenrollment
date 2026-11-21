<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('students', function (Blueprint $table) {
            $table->string('Father_Name')->nullable()->change();
            $table->integer('Father_Contact')->nullable()->change();
            $table->string('Mother_Name')->nullable()->change();
            $table->integer('Mother_Contact')->nullable()->change();
            $table->string('Guardian_Name')->nullable()->change();
            $table->integer('Guardian_Contact')->nullable()->change();
        });
    }

    public function down(): void
    {
        Schema::table('students', function (Blueprint $table) {
            $table->integer('Guardian_Contact')->default(null)->change();
            $table->string('Guardian_Name')->default(null)->change();
            $table->integer('Mother_Contact')->default(null)->change();
            $table->string('Mother_Name')->default(null)->change();
            $table->integer('Father_Contact')->default(null)->change();
            $table->string('Father_Name')->default(null)->change();
        });
    }
};

