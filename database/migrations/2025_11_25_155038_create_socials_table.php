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
    Schema::create('socials', function (Blueprint $table) {
        $table->id();
        $table->string('platform');   // Nama (misal: Instagram)
        $table->string('url');        // Link profil
        $table->string('icon');       // Kode FontAwesome (misal: fab fa-instagram)
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('socials');
    }
};
