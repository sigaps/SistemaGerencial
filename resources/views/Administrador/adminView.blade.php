@extends('admin.layout')

@section('content')
<form>
    <div class="container" style="text-align: center">
       
                    <h5>Ministerio de Salud</h5>
                    <h5>Direccion de Salud Ambiental en el Area de San Salvador</h5>
                    <div>
                      <label>Fecha:</label>
                      <label>Numero de Reporte:</label>
                      <label>Usuario:</label>
                    </div>
                    <div>
                        <h5>Lista de permisos sanitarios solicitados, aprobados</h5>
                        <h5>y denegados al mes por rubro de las 
                          organizaciones solicitantes</h5>
                    </div>
                    <div>
                    <label>Rubro:</label>
                    <select>
    
                    </select>
                    <br>
                    <label>Estado del Permiso:</label>
                    <select>
                        
                        </select>
                        <br>
                    <label>Desde:</label>
                    <input type="date"/>
                    <br>
                    <label>Hasta:</label>
                    <input type="date"/>
                    </div>
                    <br>
                    <div>
                      <button name="generar">Generar</button>
                      <button name="regresar"> Regresar</button>
                      <button name="ayuda">Ayuda</button>
                    </div>
                
    </div>
</form>

@stop