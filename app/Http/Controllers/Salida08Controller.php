<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Salida08Controller extends Controller
{
      public function __construct()
    {
        $this->middleware('auth');
    }
    
     public function index()
    {
        return view('admin.salida08.index'); 
    }
}
