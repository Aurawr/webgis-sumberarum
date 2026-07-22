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
        Schema::create('batas_wilayah', function (Blueprint $table) {
            $table->id();
            $table->string('nama_dusun')->nullable();
            $table->string('desa')->nullable();
            $table->string('kecamatan')->nullable(); 
            $table->geometry('geom', 'multipolygon', 4326)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('batas_wilayah');
    }
};
