<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelAdmin extends Model
{
    use HasFactory;
    protected $table = 'tb_admin';
    
    protected $fillable = [
        'email',
        'password',
        'username',
    ];
    public $timestamps = false;
}
