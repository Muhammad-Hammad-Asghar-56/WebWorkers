<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataProcessingController extends Controller
{
    public function processData()
    {
        return view('process');
    }
}
