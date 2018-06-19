<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Estados de Permisos </title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ public_path()}}/css/reportes.css" rel="stylesheet">
</head>

<body>
<div class="container-fluid">
<!--Contenido -->
	<div class="col-lg-12">
	    <div class="row-fluid">
	    	<!--<div id="logo">
        		@if(is_file(public_path().'/img/logoMINED.jpg'))
        			<div class="foto">
            			<img src="{{ public_path()}}/img/logoMINED.jpg" height="110px" width="110px" class="img-thumbnail">
        			</div>
        		@else
        			<div class="foto">
            			<img src=""  class="img-thumbnail">
        			</div>
        		@endif
    		</div>
    		-->
    		<div  id="contenedor">
    			<div>
    				<h5>Fecha: {{$fecha}}</h5>
    				<h5>N° reporte: 1</h5>
    				<h5>Usuario: {{$user->name}}</h5> 
    			</div>
		    	<div class="encabezado" id="encabezado">	
              		<h4>Ministerio de Salud</h4>
			    	<h4>Direccion de Salud Ambiental de San Salvador</h4>
		    	</div>
		 	</div>

	    	<div class="panel-heading">
	    		<h3>Utilidades obtenidas en la solicitud y otorgamiento de permisos sanitarios.</h3>
	    	</div>

	    	<!-- /.panel-heading -->
	    	<div style="overflow-x:auto;">
	    		<div class="table table-striped table-bordered table-condensed table-hover">
	    			<table class="table" id="tablanommina">
			    	<thead>			
			    		<tr>
							<th>id</th>
							<th>Rubro</th>
							<th>Total</th>
			    		</tr>
			    	</thead>
			    		@foreach ($detalles as $det)
			    		<tr>
			    			<td>{{ $det->id}}</td>
			    			<td>{{ $det->type}}</td>
			    			<td>{{ $det->total}}</td>
			    		
			    		</tr>
			    		@endforeach
	    			</table>
	    		</div>
	    		<!-- /.table-responsive -->

				<div class="col-lg-3 col-md-6 col-sm-8 col-xs-12">
					<h5>PARAMETROS DE FILTRADO: </h5>
					<h5>Rubro: {{$rubro}}</h5>
					<h5>Fecha inicial: {{$fechainicio}}</h5>
					<h5>Fecha Final: {{$fechafin}}</h5>
				</div> 
	   		 </div>
      	</div>
   	</div>              
	<!-- Fin Contenido-->

</div>
</body>
</html>