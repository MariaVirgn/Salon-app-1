<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Jasa;
use App\Models\Riwayat;
use Illuminate\Http\Request;

class JasaController extends Controller
{
    function read(){
        $data = Jasa::all();
        
        return $data;
    }

    function insert(Request $request){
        $request->validate([
            'nama'=> 'required',
            'harga'=> 'required|numeric',
            'desc'=>'required'
        ]);

        $result = Jasa::insertJasa(
            $request->input('nama'),
            $request->input('harga'),
            $request->input('desc')
        );

        return $result;
    }
}
