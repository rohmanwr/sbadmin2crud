<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pasiens', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('no_rm')->unique();
            $table->date('tanggal_lahir')->nullable();
            $table->enum('jenis_kelamin', ['L', 'P'])->nullable();
            $table->string('alamat')->nullable();

            $table->unsignedBigInteger('metode_pembayaran_id')->nullable();
            $table->foreign('metode_pembayaran_id')
                ->references('id')
                ->on('metode_pembayaran')
                ->onDelete('set null');

            $table->string('keluhan')->nullable();
            $table->string('telepon')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::table('pasiens', function (Blueprint $table) {
            $table->dropForeign(['metode_pembayaran_id']);
        });

        Schema::dropIfExists('pasiens');
    }
};
