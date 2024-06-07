<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelGaji extends Model
{
    use HasFactory;
    protected $table = 'tb_gaji';
    protected $fillable = [
        'id_karyawan',
        'tanggal_pembayaran',
        'gaji_pokok',
        'status_pembayaran',
    ];
    public function karyawan()
    {
        return $this->belongsTo(ModelKaryawan::class, 'id_karyawan');
    }
}
