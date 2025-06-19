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
        Schema::create('bandar_udaras', function (Blueprint $table) {
            $table->id();
            $table->string('bandara_udara_id')->unique();
            $table->string('nama_bandara');
            $table->string('nama_alias');
            $table->string('kode_iata');
            $table->string('lokasi');
            $table->string('provinsi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bandar_udaras');
    }
};
