<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Permisos Sanitarios </title>
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


    			<div class="col-lg-3 col-md-6 col-sm-8 col-xs-12">
					<h5>PARAMETRO DE BUSQUEDA</h5>
					<h5>Fecha inicial: {{$fechainicio}}</h5>
					<h5>Fecha Final: {{$fechafin}}</h5>
					<img src="escudo.jpg" align="right" width="501px" height="480px">
					<img src="log.jpg" align="left" width="608px" height="164px">
				</div>
		 	

		    	<div class="encabezado" id="encabezado">
		    	
              		<h2>MINISTERIO DE SALUD</h2>
			    	<h4>Direccion de Salud Ambiental de San Salvador</h4>
		    	</div>
		 	</div>

	    	<div class="panel-heading">
	    		<h3>Listado de permisos sanitarios Aprobados/Denegados/En proceso</h3>
	    	</div>

	    	<!-- /.panel-heading -->
	    	<div style="overflow-x:auto;">
	    		<div class="table table-striped table-bordered table-condensed table-hover">
	    			<table class="table" id="tablanommina">
			    	<thead>			
			    		<tr>
							<th>Numero Solicitud</th>
							<th>Nombre establecimiento</th>
							<th>Rubro</th>
							<th>Estado</th>
							
			    		</tr>
			    	</thead>
			    	@foreach ($detalles as $det)
			    		<tr>
			    			<td>{{$det->numerosolicitud}}</td>
			    			<td>{{$det->nomestablecimiento}}</td>
			    			<td>{{$det->tipo}}</td>
			    			<td>{{$det->estado}}</td>
			    		</tr>
			    		@endforeach
			    	
	    			</table>
	    		</div>
	    		<!-- /.table-responsive -->

			 
	   		 </div>
      	</div>
   	</div>              
	<!-- Fin Contenido-->

</div>
</body>
</html>

<style type="text/css">
	h2{
		text-align: center;
	}

	h5{
		margin:0.5% 0;
	}

	img{
		
	}
</style>