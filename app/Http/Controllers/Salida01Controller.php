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



class Salida01Controller extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    
     public function index(Request $request)
    {
        
    		 if ($request)
       {
            $fechainicio=trim($request->get('fechainicio'));
            $fechafin=trim($request->get('fechafin'));


           if ($fechainicio!=null && $fechafin!=null){

                   return $this->reportepdf($fechainicio,$fechafin);
               }    

            }

     
        return view('admin.salida01.index'); 
    }



    public function reportepdf($fechainicio,$fechafin)
    {
    	
         

          $nuevo1 = date('Y/m/d', strtotime($fechainicio));
          $nuevo2 = date('Y/m/d', strtotime($fechafin));


          $date=new Carbon();
          $fecha = $date->format('d/m/Y h:i A');
          $user=Auth::user();
   

            // validadr fecha
            if($fechainicio > $fechafin){
                Session::flash('store','La "Fecha Final" debe ser posterior a la "Fecha Inicial"');
                return Redirect::to('admin/salida01');
            }  


             $detalles=DB::table('expediente as exp')
           ->join('establecimiento as est',
            'est.idestablecimiento','=',
            'exp.idexpediente')
           ->join('tipoestablecimiento as tip',
            'tip.idtipo','=',
            'est.idestablecimiento')
           ->select('exp.numerosolicitud','est.nomestablecimiento','tip.tipo','exp.estado')
           ->wherebetween('exp.fechafinexpediente', array($nuevo1,$nuevo2))
           ->get(); 

            

           

        $pdf = PDF::loadView('admin.salida01.reporte01',["detalles"=>$detalles,"fecha"=>$fecha,"fechainicio"=>$fechainicio,"fechafin"=>$fechafin,"user"=>$user]);


        $papel_tamaño = array(0,0,216,279);
        $pdf->setPaper("letter" ,'portrait');
        return $pdf->stream('reporte.pdf');
    }

  
      
}
