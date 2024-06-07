<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tb_gaji', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_karyawan');
            $table->date('tanggal_pembayaran');
            $table->integer('gaji_pokok');
            $table->enum('status_pembayaran', ['Proses', 'Sukses']);
            $table->timestamps();

            $table->foreign('id_karyawan')->references('id')->on('tb_karyawan');
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('tb_gaji');
    }
};
