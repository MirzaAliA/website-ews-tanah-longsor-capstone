<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SSensor;

class HistorySensor extends Controller
{
    public function indexSensor()
    {
        $data = SSensor::latest()->limit(100)->get();
        
        return view('historybacaan', ['data' => $data]);
    }
}
