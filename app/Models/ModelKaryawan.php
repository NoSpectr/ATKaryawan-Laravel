<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelKaryawan extends Model
{
    use HasFactory;
    protected $table = 'tb_karyawan';
    protected $fillable = [
        'nama_karyawan',
        'jabatan',
        'jk',
        'no_telp',
        'alamat',
        'ttl',
        'status_karyawan',
    ];
}
