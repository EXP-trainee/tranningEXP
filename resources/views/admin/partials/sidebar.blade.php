<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('template/dist/img/AdminLTELogo.png')}} " alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">EXP Trainning</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('template/dist/img/user2-160x160.jpg')}} " class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Việt Đẹp Trai</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('infouser.index')}}" class="nav-link active">
              <i class="far fa-circle nav-icon"></i>
              <p>User</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('workdays.index')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Workdays</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('salary.index')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Salary</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('show_customer')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Infomation</p>
            </a>
          </li>
          @canany("roles.view,create,edit,delete")
          <li class="nav-item">
            <a href="{{route('role.index')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Role</p>
            </a>
          </li>
          @endcan
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

