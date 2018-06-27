<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Response;
use Session;
use PDF;
use DB;

class Salida04Controller extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    
     public function index()
    {
        return view('admin.salida04.index'); 
    }
}
