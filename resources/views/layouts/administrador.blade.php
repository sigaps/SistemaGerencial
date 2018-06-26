
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="" class="brand-link">
    <img src="" alt="" class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light" style="color: #2e86c1 ">SIGAPS</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <!---<img src="/adminlte/gerente.jpeg" class="img-circle elevation-2" alt="User Image">-->
      </div>
      <div class="info">
        <a href="#" class="d-block">Administrador del Sistema</a>
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
              <p>Administrador
               <i class="right fa fa-angle-left"></i></p>
              </a>
                <ul class="nav nav-treeview">
                  <a href="{{url('/admin/users')}}" class="nav-link">
                   <i class="fa fa-address-book-o"></i>
                    <p>Gestionar usuario</p>
                  </a>
               

               
                 <li class="nav-item">
                  <a href="" class="nav-link">
                    <i class="fa fa-address-book-o"></i>
                    <p>Generar Backup</p>
                  </a>
                </li>
             </ul>
             </li>
    </nav>
    <!-- /.sidebar-menu -->

  </div>
  <!-- /.sidebar -->
</aside>