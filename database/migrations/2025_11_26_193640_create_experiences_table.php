<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   public function up(): void
{
    Schema::create('experiences', function (Blueprint $table) {
        $table->id();
        // Kolom untuk Organisasi
        $table->text('organization_summary'); // Ringkasan (muncul di kartu)
        $table->text('organization_detail');  // Detail (muncul di pop-up)
        
        // Kolom untuk Kepanitiaan
        $table->text('committee_summary');
        $table->text('committee_detail');
        
        // Kolom untuk Magang
        $table->text('internship_summary');
        $table->text('internship_detail');
        
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experiences');
    }
};
