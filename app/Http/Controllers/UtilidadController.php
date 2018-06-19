<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use \App\Expediente;
use Carbon\Carbon;
use Response;
use Session;
use PDF;
use DB;



class UtilidadController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(Request $request){


       if ($request)
       {
            $fechainicio=trim($request->get('fechainicio'));
            $fechafin=trim($request->get('fechafin'));
            $rubro=trim($request->get('rubro'));

            // Cabiar formato fecha
            //$date=new Carbon($fechainicio);
            //$fechainicio = $fechainicio->format('Y-m-d');

            //$date=new Carbon($fechafin);
            //$fechafin = $fechafin->format('Y-m-d');
           
           if ($fechainicio!=null && $fechafin!=null){

                   return $this->reportepdf($fechainicio,$fechafin,$rubro);
               }    

            }

           $rubro=DB::table('establishment_type')
            ->select('id','type')
            ->get();

        return view('admin.utilidad.index',["rubro"=>$rubro]);

    }

    public function reportepdf($fechainicio,$fechafin,$rubro)
    {
    	
          $date=new Carbon();
          $fecha = $date->format('d/m/Y h:i A');
          $user=Auth::user();
   

            // validadr fecha
            if($fechainicio > $fechafin){
                Session::flash('store','La "Fecha Final" debe ser posterior a la "Fecha Inicial"');
                return Redirect::to('admin/utilidad');
            }  

           $detalles=DB::table('establishment_type as type')
           ->join('establishment as esta','esta.id','=','type.id')
           ->join('casefile_establishment as cest','cest.id','=','esta.id')
           ->join('casefile as case','case.id','=','cest.id')
           ->join('payment_procedure as pay','pay.id','=','case.id')
           ->select('case.certification_start_on','pay.amount','type.type','type.id',DB::raw('sum(pay.amount) as total'))
           ->wherebetween('case.certification_start_on', array($fechainicio,$fechafin))
           ->orwhere('type.id','=',$rubro)
           ->groupBy('case.certification_start_on','pay.amount','type.type','type.id')
           ->get();  

         $rubros=DB::table('establishment_type')
         ->select('id','type')
         ->get();

        $pdf = PDF::loadView('admin.utilidad.reporte11',["detalles"=>$detalles,"rubros"=>$rubros,"rubro"=>$rubro,"fecha"=>$fecha,"fechainicio"=>$fechainicio,"fechafin"=>$fechafin,"user"=>$user]);

        $papel_tamaño = array(0,0,216,279);
        $pdf->setPaper("letter" ,'portrait');
        return $pdf->stream('reporte.pdf');
    }
}
