<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;

class SensorData extends Controller
{
    public function index(){
        $data = Data::latest()->first();
        return view('home',['data'=>$data]);
    }
}
