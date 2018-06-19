<!DOCTYPE html>

<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>SIGAPS</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="/adminlte/plugins/font-awesome/css/font-awesome.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/adminlte/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- Bootstrap-select 1.12.2 -->
      <link rel="stylesheet" href="{{asset('css/bootstrap-select.min.css')}}">
  </head>

<body class="hold-transition sidebar-mini">
  

    <!-- Navbar--> 
    <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
     
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
        </li>
        <center><h3>SIGAPS</h3></center>
      </ul>
    
      <ul class="navbar-nav ml-auto">

        <!-- Authentication Links -->
        @if (Auth::guest())
          <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('login') }}" class="nav-link" style="font-weight: bold; color:#ffffff">Inicar sesión</a>
          </li>
        @else 
            <li class="nav-item d-none d-sm-inline-block" style="font-weight: bold; color:#ffffff">
              <a href="/home" class="nav-link">Inicio</a>
            </li>

            <li class="nav-item dropdown">

                <a class="nav-link" data-toggle="dropdown" href="#" style="font-weight: bold; color:#2ECC71" >
                  {{ Auth::user()->name }}
                  <span class="badge badge-warning navbar-badge"></span> 
                </a>
          
                <div class="dropdown-menu dropdown-menu-right">
                   <a class="dropdown-item" href="{{ route('logout') }}" 
                       onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
                       <i class="fa fa-user-o mr-2"></i> Cerrar sesión
                   </a>
                   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                   </form>
                </div>
            </li>
        @endif

           
    
      
      </ul>
    </nav>

  <!-- /.navbar -->

  @if (Auth::guest())
      <li>
          <a href="/admin/apoyo"><i class="fa fa-fw fa-home"></i> Inicio</a>
      </li>
      @else
          @if (Auth::user()->type=="coordinador")
              @include('layouts.tactico')
          @endif

          @if (Auth::user()->type=="admin")
              @include('layouts.administrador')
          @endif

          @if (Auth::user()->type=="gerente")
               @include('layouts.gerente')
          @endif
      @endif

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="/home">Inicio</a></li>
              <li class="breadcrumb-item active">Pagina principal</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->

  <div class="content">

  @yield('content')
  <!-- /.content -->

  </div>


  <!-- Main Footer -->
  </div>

  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->
  <!-- Bootstrap-select 1.12.2 -->
  <script src="{{asset('js/bootstrap-select.min.js')}}"></script>
  <!-- jQuery -->
  <script src="/adminlte/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="/adminlte/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="/adminlte/js/adminlte.min.js"></script>


</body>
</html>
