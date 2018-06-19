@extends('layouts.layout')

@section('content')

<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
    @include('mensajes.messages')
</div>

{!! Form::open(array('url'=>'admin/expediente','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}

    <div class="container" class="col-lg-12 col-md-12 col-sm-8 col-xs-12" style="text-align: center">
       
                  <h2>MINISTERIO DE SALUD</h2>
                  <h4>Direccion de Salud Ambiental de San Salvador</h4>
                    <div>
                      <label>Fecha: 10/06/2018</label>    <br>
                      <label>Numero de Reporte: 1</label>    <br>
                      <label>Usuario: Gerente</label>
                    </div>
                    <div>
                        <h5>Lista de permisos sanitarios solicitados, aprobados
                        y denegados al mes por rubro</h5> 
                    </div>

                  <div class="container col-lg-4 col-md-8 col-sm-8 col-xs-12 " style="text-align: center" >

                       <br>
                      <label>Rubro:</label>

                      <div class="form-group">
                        <select name="rubro" id="rubro" class="form-control" data-live-search="true">
                            <option value="">Seleccionar rubro...</option>  
                          @foreach ($rubro as $rub)
                            <option value="{{$rub->type}}"> {{$rub->type}}</option>
                          @endforeach        
                        </select> 
                      </div>
           
                    
                    <br>
                    <label>Estado del Permiso:</label>

                   
                      <div class="form-group">
                        <select name="estado" id="estado"  class="form-control">
                            <option value="">Seleccionar estado...</option>  
                            <option value="1">Aprobado</option>
                            <option value="2">Denegado</option>
                        </select> 
                      </div>
                    
                   
                    <br>
                    <label>Desde:</label>
                   <input type="text" id="desde" class="form-control">
                    <br>
                    <label>Hasta:</label>
                    <input type="text" id="hasta" class="form-control">
          
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
     
   </script>

 

@stop