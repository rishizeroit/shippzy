<!-- Main Sidebar Container -->



<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <!-- <a href="index3.html" class="brand-link">
      <img src="{{asset('admin/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Login</span>
    </a> -->

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{base_url('admin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{route('admin.dashboard')}}" class="d-block">{{ ucfirst(Auth::user()->name) }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
              
          @if(is_admin()) 
          <li class="nav-item">
            <a href="{{route('admin.dashboard')}}" class="nav-link {{ (request()->is('admin/dashboard')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('customers.index') }}" class="nav-link {{ (request()->is('admin/customers')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Customers
                <!-- <span class="badge badge-info right">6</span> -->
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="{{ route('carriers.index') }}" class="nav-link {{ (request()->is('admin/carriers')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Carriers
                <!-- <i class="fas fa-angle-left right"></i> -->
                <!-- <span class="badge badge-info right">6</span> -->
              </p>
            </a>
            <!-- <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Navigation</p>
                </a>
              </li>
            </ul> -->
          </li>
          <li class="nav-item">
            <a href="{{route('services.index')}}" class="nav-link {{ (request()->is('admin/services')) ? 'active' : '' }}">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Services
              </p>
            </a>
          </li>
          @else
          <li class="nav-item">
            <a href="{{route('carrier.dashboard')}}" class="nav-link {{ (request()->is('carrier/dashboard')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('trailers.index') }}" class="nav-link {{ (request()->is('carrier/trailers')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Trailers
                <!-- <span class="badge badge-info right">6</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('prices.index') }}" class="nav-link {{ (request()->is('carrier/service/prices')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Services
                <span class="badge badge-info right">6</span>
              </p>
            </a>
          </li>
          @endif
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
    </aside>
