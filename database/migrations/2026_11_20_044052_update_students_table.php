<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('students', function (Blueprint $table) {
            $table->string('Father_Name')->change();
            $table->string('Mother_Name')->after('Father_Contact');
            $table->integer('Mother_Contact')->change();
            $table->string('Guardian_Name')->after('Mother_Contact');
            $table->integer('Guardian_Contact')->change();
            $table->dropColumn('father');
            $table->dropColumn('mother');
            $table->dropColumn('guardian');
        });
    }

    public function down(): void
    {
        Schema::table('students', function (Blueprint $table) {
            $table->string('Guardian')->nullable();
            $table->string('Mother')->nullable();
            $table->integer('Father')->nullable();
            $table->integer('Guardian_Contact')->nullable()->default(null)->change();
            $table->dropColumn('Guardian_Name');
            $table->integer('Mother_Contact')->nullable()->default(null)->change();
            $table->dropColumn('Mother_Name');
            $table->string('Father_Name')->nullable()->default(null)->change();
        });
    }
};

