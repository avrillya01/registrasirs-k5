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
        Schema::create('registrasi_rumahsakitk5', function (Blueprint $table) {
            $table->id();
            $table->string('nama_dokter');
            $table->string('dokter_spesialis');
            $table->string('tanggal_berapa');
            $table->time('jam_berapa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrasi_rumahsakitk5');
    }
};
