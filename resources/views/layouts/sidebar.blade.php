  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link" style="text-align:center">
      <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light" style="font-weight:bold" !important;font-size:20px>Bernice High School</span></span>
    </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="../../dist/img/prophet.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">{{Auth::user()->name}}</a>
      </div>
    </div>


    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        @if(Auth::user()-> user_type == 1)
        <li class="nav-item">
          <a href="../admin/dashboard" class="nav-link @if(Request::segment(2)=='dashboard') active @endif">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard 
            </p> 
          </a>
        </li>
        <li class="nav-item">
          <a href="../admin/list" class="nav-link @if(Request::segment(2)=='admin') active @endif">
            <i class="nav-icon far fa-user"></i>
            <p>
              Admin
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="../admin/class/list" class="nav-link @if(Request::segment(2)=='admin') active @endif">
            <i class="nav-icon far fa-user"></i>
            <p>
              Class
            </p>
          </a>
        </li>
        @elseif(Auth::user()->user_type == 2)
        <li class="nav-item">
          <a href="../teacher/dashboard" class="nav-link @if(Request:: segment(2)=='dashboard') active @endif">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p> 
          </a>
        </li>
        @endif
        
        <li class="nav-item">
          <a href="{{url('logout')}}" class="nav-link">
            <i class="nav-icon far fa-user"></i>
            <p>
              Logout
            </p>
          </a>
        </li>
        
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>