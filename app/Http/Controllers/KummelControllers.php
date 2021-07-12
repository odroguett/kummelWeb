<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KummelControllers extends Controller
{
    public function home()
    {
        return view('kummel.home');
      // echo('Hola');
        
    }
}
