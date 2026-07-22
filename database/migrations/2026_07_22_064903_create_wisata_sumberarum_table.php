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
        Schema::create('wisata_sumberarum', function (Blueprint $table) {
            $table->id();
            $table->string('nama_wisata')->nullable();
            $table->string('dusun')->nullable();
            // Tipe data POINT untuk titik koordinat
            $table->geometry('geom', 'point', 4326);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wisata_sumberarum');
    }
};
