<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jasa extends Model
{
    use HasFactory;

    protected $table = 'tb_jasa';

    protected $fillable =[
        'nama_jasa',
        'harga_jasa',
        'deskripsi_jasa'
    ];
}
