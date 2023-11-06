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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id()->uuid();
            $table->string('nama');
            $table->string('jumlah_pengunjung');
            $table->string('instansi')->nullable();
            $table->string('email');
            $table->string('no_telp');
            $table->string('jenis_reservasi');
            $table->string('kewarganegaraan')->nullable();
            $table->date('tanggal');
            $table->time('jam');
            $table->string('kelompok')->nullable();
            $table->string('jenjang')->nullable();
            $table->string('barcode')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
