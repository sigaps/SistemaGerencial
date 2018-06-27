
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="" class="brand-link">
    <img src="" alt="" class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light"  style="color: #2e86c1 "  >SIGAPS</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <!---<img src="/adminlte/gerente.jpeg" class="img-circle elevation-2" alt="User Image">-->
      </div>
      <div class="info">
        <a href="#" class="d-block">Nivel Tactico</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column responsive" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview menu-close">
                <a href="#" class="nav-link active">
                  <i class="fa fa-circle"></i>
                  <p>Nivel tactico
                   <i class="right fa fa-angle-left"></i></p>
                </a>
                 <ul class="nav nav-treeview">
           

                <li class="nav-item">
                 <a href="{{url('/admin/salida06')}}" class="nav-link">
                  <i class="fa fa-file-text-o"></i>
                  <p>Desempeño de personal</p>
                </a>
              </li>
              </li>
              <li class="nav-item">
                <a href="{{url('/admin/salida07')}}" class="nav-link">
                  <i class="fa fa-file-text-o"></i>
                  <p>Permisos de una empresa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/admin/salida08')}}" class="nav-link">
                  <i class="fa fa-file-text-o"></i>
                  <p>Lista de permisos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/admin/salida09')}}" class="nav-link">
                  <i class="fa fa-file-text-o"></i>
                  <p>Permisos por etapas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/admin/salida10')}}" class="nav-link">
                  <i class="fa fa-file-text-o"></i>
                  <p>Permisos proximos a vencer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/admin/salida11')}}" class="nav-link">
                  <i class="fa fa-file-text-o"></i>
                  <p>Censo</p>
                </a>
              </li>
              </ul>
            </li>   


        
      
    </nav>
    <!-- /.sidebar-menu -->

  </div>
  <!-- /.sidebar -->
</aside>