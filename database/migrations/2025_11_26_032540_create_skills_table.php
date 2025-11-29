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
        Schema::create('skill', function (Blueprint $table) {
            $table->id();
            $table->string('title');       // Judul (misal: Juara 1 Futsal UNY)
            $table->string('category');    // Kategori (misal: Futsal, Voli)
            $table->string('image');       // Foto kegiatan/piala
            $table->string('year')->nullable(); // Tahun (Opsional)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skill');
    }
};
