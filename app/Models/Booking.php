<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table = 'tb_booking';
    protected $primaryKey = 'id_booking'; 
    
    protected $fillable =[
        'id_cust',
        'id_jasa',
        'jam_booking',
        'tanggal_booking',
        'metode_pembayaran',
        'val'
    ];
}
