@extends('layouts.layout')

@section('content')

<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
    @include('mensajes.messages')
</div>

{!! Form::open(array('url'=>'admin/utilidad','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!} 

    <div class="container" class="col-lg-12 col-md-12 col-sm-8 col-xs-12" style="text-align: center">
        
                  <h2>MINISTERIO DE SALUD</h2>
                  <h4>Direccion de Salud Ambiental de San Salvador</h4>
                    <div>
                      <label>Fecha: 10/06/2018</label>    <br>
                      <label>Numero de Reporte: 1</label>    <br>
                      <label>Usuario: Gerente</label>
                    </div>
                    <div>
                        <h5>Utilidades obtenidas en la solicitud y otorgamiento de permisos sanitarios.</h5> 
                    </div>

          <div class="container col-lg-4 col-md-8 col-sm-8 col-xs-12 " style="text-align: center" >

                       <br>
                      <label>Rubro:</label>

                      <div class="form-group">
                        <select name="rubro" id="rubro" class="form-control" data-live-search="true" required>
                            <option value="">Seleccionar rubro...</option>  
                          @foreach ($rubro as $rub)
                            <option value="{{$rub->id}}"> {{$rub->type}}</option>
                          @endforeach        
                        </select> 
                      </div>
             
                    <br>
                    <label>Desde:</label>
                   <input type="text" name="fechainicio" id="desde" class="form-control" placeholder="00/00/0000" required value="{{old('fechainicio')}}">
                    <br>
                    <label>Hasta:</label>
                    <input type="text" name="fechafin" id="hasta" class="form-control" placeholder="00/00/0000" required value="{{old('fechafin')}}">
          
          </div>

            <br><br>
            <div class="form-group">
              <a><button type="submit" id="reporte" class="btn btn-success"><i></i> Reporte</button></a>
              <a><button type="submit" id="reporte" class="btn btn-info"><i></i> Ayuda</button></a>
            </div>
   
                
    </div>

{{Form::close()}}

<style type="text/css">
 form{
    margin: auto;
    width: 80%;
    max-width: 800px;
    background: #85929e;
    padding: 30px;
    border: 1px solid rgba(0,0,0,0,2);
    border-radius: 20px;
}  
 h2,h4{
    color:  #f7f9f9 ;
 }
</style>


  <link rel="stylesheet" href="{{asset('css/jquery-ui.min.css')}}">
  <script src="{{asset('js/jquery.js')}}"></script>
  <script src="{{asset('js/jquery-ui.min.js')}}"></script>

  <script>
     $( "#desde" ).datepicker();
     $( "#hasta" ).datepicker();

   $.datepicker.regional['es'] = {
   closeText: 'Cerrar',
   prevText: '< Ant',
   nextText: 'Sig >',
   currentText: 'Hoy',
   monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
   monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
   dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
   dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
   dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
   weekHeader: 'Sm',
   dateFormat: 'dd/mm/yy',
   firstDay: 1,
   isRTL: false,
   showMonthAfterYear: false,
   yearSuffix: ''
   };
   $.datepicker.setDefaults($.datepicker.regional['es']);
  $(function () {
  $("#desde").datepicker();
  });
  </script>

 

@stop