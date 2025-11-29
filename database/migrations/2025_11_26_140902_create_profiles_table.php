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
    Schema::create('profiles', function (Blueprint $table) {
        $table->id();
        $table->text('description'); // Untuk paragraf pembuka "Halo! Saya..."
        $table->string('name');
        $table->string('birth_date'); // Tempat & Tanggal Lahir
        $table->text('address');
        $table->string('email');
        $table->string('education');
        $table->string('hobby');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
