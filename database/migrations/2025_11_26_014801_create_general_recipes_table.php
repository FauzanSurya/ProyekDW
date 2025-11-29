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
    Schema::create('general_recipes', function (Blueprint $table) {
        $table->id();
        $table->text('tools');       // Kolom Alat
        $table->text('ingredients'); // Kolom Bahan
        $table->text('steps');       // Kolom Langkah-langkah
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('general_recipes');
    }
};
