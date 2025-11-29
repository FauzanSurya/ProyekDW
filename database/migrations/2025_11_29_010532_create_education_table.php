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
    Schema::create('educations', function (Blueprint $table) {
        $table->id();
        $table->string('year');        // Contoh: 2019 - 2022
        $table->string('school');      // Contoh: SMA Negeri 1 Yogyakarta
        $table->string('major')->nullable(); // Jurusan (IPA/IPS/Matematika)
        $table->text('description')->nullable(); // Prestasi/Info singkat
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('education');
    }
};
