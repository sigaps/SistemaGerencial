<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use \App\SIBASI;
use \App\UCSF;
use \App\Municipio;
use Carbon\Carbon;
use Response;
use Session;
use PDF;
use DB;

class EstimacionController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $req){
        if($req){
            $fecIni=trim($req->get('fecIni'));
            $fecFin=trim($req->get('feFin'));
            $est=trim($req->get('est'));
            if($fecIni!=null && $fecFin!=null){
                return $this->$repPDF($fecIni,$fecFin,$est);
        }
    }  
    return view('admin.estimacion.index',["ests",$ests]);
    }
}
