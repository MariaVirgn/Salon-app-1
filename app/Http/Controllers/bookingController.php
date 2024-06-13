<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class bookingController extends Controller
{
    function read()
    {
        $data = Booking::join('tb_cust', 'tb_booking.id_cust', '=', 'tb_cust.id_cust')->join('tb_jasa', 'tb_booking.id_jasa', '=', 'tb_jasa.id_jasa')
            ->select('tb_booking.*','tb_cust.username','tb_jasa.nama_jasa')
            ->where('tb_booking.val','N')
            ->get();

        return $data;
    }

    function konfirmasiBooking($id)
    {
        $data = Booking::where('id_booking', $id)->first();

        if($data){
            $data->val = 'Y';
            $data->save();

            return response()->json(['success' => true]);
        } else{
            return response()->json(['success' => false, 'message' => 'Pesanan Tidak Ditemukan'], 404);
        }
    }
}
