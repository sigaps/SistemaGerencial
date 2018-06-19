@extends('admin.layout')

@section('content')
<title>Reporte</title>
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
                    <label>Desde:</label>
                    <label>Hasta:</label>
                </div>
                <div>
                    <div>
                        <table class="table table-hover">
                          <thead>
                            <tr>
                              <th>campo1</th>
                              <th>campo2</th>
                              <th>campo3</th>
                              <th>campo4</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                                <td>4</td>
                                <td>5</td>
                                <td>5</td>
                                <td>6</td>
                            </tr>
                            <tr>
                              <td>4</td>
                              <td>5</td>
                              <td>5</td>
                              <td>Total</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                </div>
                <div>
                  <button name="imprimir">Imprimir</button>
                  <button name="regresar"> Regresar</button>
                  <button name="ayuda">Ayuda</button>
                </div>
          
       
</div>
</form>
@endsection