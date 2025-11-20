<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('metode_pembayaran', function (Blueprint $table) {
            $table->id();
            $table->enum('jenis', ['umum', 'asuransi', 'karyawan', 'bpjs']);
            $table->string('nama_metode')->nullable();
            $table->string('nomor_kartu')->nullable();
            $table->string('kelas_perawatan')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('metode_pembayaran');
    }
};
