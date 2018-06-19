<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Fasade as PDF;
use \App\Expediente;
use DB;
/**
*Fecha: 10/06/2018
*Autor: BRALSR
*Versión: 1.0
* descripción de las variables:
* $casefile: se utiliza para identificar los expedientes
* $casefiles: para retornar los datos de los expedientes
*/
class ExpedienteController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request){


    

        $rubro=DB::table('establishment_type')
            ->select('id','type')
            ->get();

        return view('admin.estado.index',["rubro"=>$rubro]);

    }

    public function reportepdf($p1,$p2,$p3,$p4)
    {
   

        $pdf = PDF::loadView('admin.estado.reporte1',["datos1"=>$datos1,"datos2"=>$datos2]);

        $papel_tamaño = array(0,0,216,279);
        $pdf->setPaper("letter" ,'portrait');
        return $pdf->stream('reporte1.pdf');
    }   

}
