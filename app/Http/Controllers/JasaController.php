<?php

namespace App\Http\Controllers;

use App\Models\Jasa;
use Illuminate\Http\Request;

class JasaController extends Controller
{
    function read(){
        $data = Jasa::all();
        
        return $data;
    }

}
