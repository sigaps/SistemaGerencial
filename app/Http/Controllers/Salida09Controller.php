<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Salida09Controller extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    
     public function index()
    {
        return view('admin.salida09.index'); 
    }
}
