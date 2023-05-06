<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Data;

class DataController extends Controller
{
    public function index()
    {
        $data = Data::all();

        return response()->json([
            'data' => $data,
            'message' => 'Plant records retrieved successfully.'
        ]);
    }

    public function store(Request $request)
    {
        $data = new Data;

        $data->humidity = $request->humidity;
        $data->temperature = $request->temperature;
        $data->soil = $request->soil;
        $data->light = $request->light;

        $data->save();

        return response()->json([
            'data' => $data,
            'message' => 'Plant record created successfully.'
        ]);
    }

    public function show(Data $data)
    {
        return response()->json([
            'data' => $data,
            'message' => 'Plant record retrieved successfully.'
        ]);
    }

}
