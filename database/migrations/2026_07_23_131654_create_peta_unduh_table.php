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
        Schema::create('peta_unduh', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('desa')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('file_path');       // path file di storage
            $table->string('file_name');       // nama asli file saat diupload
            $table->unsignedBigInteger('file_size')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peta_unduh');
    }
};
