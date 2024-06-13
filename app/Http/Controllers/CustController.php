<?php

namespace App\Http\Controllers;

use App\Models\Cust;
use Illuminate\Http\Request;

class CustController extends Controller
{
    function read(){
        $data = Cust::all();
        
        return $data;
    }
}
