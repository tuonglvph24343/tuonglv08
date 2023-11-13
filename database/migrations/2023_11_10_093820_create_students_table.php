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
        Schema::create('students', function (Blueprint $table) {
            $table->id()->unique();
            $table->timestamps();
            $table->string('TenLop');
            $table->string('TenSinhVien');
            $table->string('Anh')->nullable();
            $table->boolean('Is_Active')->default(true);
            $table->text('ChuThich')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
