<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use \App\ProcesoExpediente;
use Response;
use Session;
use PDF;
use DB;

class TiempoPromedioController extends Controller
{
    //constructor
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $req){
        if($request){
            $fecIni=trim($req->get('fecIni'));
            $fecFin=trim($req->get('feFin'));
            $proExp=trim($req->get('proExp'));
            if($fecIni!=null && $fecFin!=null){
                return $this->$repPDF($fecIni,$fecFin,$proExp);
            }
        }
        $proExp=DB::table('casefile_process')
        ->select('id','casefile_id','process_id')->get();
        return view('admin.tiempoPromedio.index',["proExps",$proExp]);
    }
    public function repPDF($fecIni,$fecFin,$proExp){
        $date=new Carbon();
          $fecha = $date->format('d/m/Y h:i A');
          $user=Auth::user();
          if($fechainicio > $fechafin){
            Session::flash('store','La "Fecha Final" debe 
            ser posterior a la "Fecha Inicial"');
            return Redirect::to('admin/tiempoPromedio');
        } 
        $proExps=DB::table('casefile_process')
        ->select('id','casefile_id','process_id')->get();
        $pdf= PDF::loadView('admin.tiempoPromedio.reporte09'
        ,["proExps"=>$proExps,"fecIni"=>$fechafin,"fecFin"=>$fecFin]);
        $papel_tamaño = array(0,0,216,279);
        $pdf->setPaper("letter" ,'portrait');
        return $pdf->stream('reporte.pdf');
    }
}
