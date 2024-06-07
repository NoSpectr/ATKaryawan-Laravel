<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tb_karyawan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_karyawan'); 
            $table->enum('jabatan',['kasir','staffGudang','kebersihan']); 
            $table->enum('jk', ['L', 'P']); 
            $table->string('no_telp'); 
            $table->text('alamat'); 
            $table->date('ttl'); 
            $table->enum('status_karyawan', ['karyawan_tetap', 'karyawan_magang','karyawan_kontrak']);
            $table->timestamps(); 
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tb_karyawan');
    }
};
