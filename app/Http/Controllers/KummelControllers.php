<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KummelControllers extends Controller
{
    public function index()
    {
        return view('kummel.index');
        
    }
}
