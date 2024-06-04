<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tb_karyawan', function (Blueprint $table) {
            $table->id(); // Kolom id otomatis menjadi primary key dengan auto increment
            $table->string('nama_karyawan'); // Kolom untuk nama karyawan
            $table->enum('jabatan',['kasir','staffGudang','kebersihan']); // Kolom untuk jabatan karyawan
            $table->enum('jk', ['L', 'P']); // Kolom untuk jenis kelamin (L = Laki-laki, P = Perempuan)
            $table->string('no_telp'); // Kolom untuk nomor telepon
            $table->text('alamat'); // Kolom untuk alamat
            $table->date('ttl'); // Kolom untuk tanggal lahir
            $table->enum('status_karyawan', ['karyawan_tetap', 'karyawan_magang','karyawan_kontrak']); // Kolom untuk status karyawan
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tb_karyawan');
    }
};
