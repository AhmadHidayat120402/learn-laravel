<?php

namespace App\Http\Controllers;

use App\Models\classRoom;
use Illuminate\Http\Request;

class classController extends Controller
{
    function index()
    {
        $data = classRoom::all();
        return view('class', [
            'data' => $data
        ]);
    }
}
