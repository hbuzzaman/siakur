<!-- Sidebar Menu -->
<!-- Sidebar -->
<div class="sidebar">
  <!-- Sidebar user panel (optional) -->
  <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
      <img src="{{ asset('adminlte/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
      <a href="#" class="d-block">{{ auth()->user()->name }}</a>
    </div>
  </div>

  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
      <li class="nav-header">
        <h4>Menu Utama</h4>
      </li>

      <li class="nav-item">
        <a href="/" class="nav-link {{ Request::is('/') ? 'active' : '' }}">
          <i class="nav-icon fa-solid fa-industry"></i>
          <p>Dashboard</p>
        </a>
      </li>

      <li class="nav-item">
        <a href="#" class="nav-link {{ Request::is('user*') ? 'active' : '' }}">
          <i class="nav-icon fa-solid fa-users"></i>
          <p>
            Users
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">

          @can('roleadmin')
          <li class="nav-item">
            <a href="/user" class="nav-link">
              <i class="fas fa-hard-hat nav-icon"></i>
              <p>Data User</p>
            </a>
          </li>
          @endcan

          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="fab fa-bitcoin nav-icon"></i>
              <p>My Profile</p>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a href="#" class="nav-link {{ Request::is('alatukur*') ? 'active' : '' }}">
          <i class="nav-icon fas fa-drafting-compass"></i>
          <p>
            Alat Ukur
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="/alatukur" class="nav-link">
              <i class="fas fa-hard-hat nav-icon"></i>
              <p>Data Alat Ukur</p>
            </a>
          </li>
          <li class="nav-item">
             <a href="" class="nav-link"> {{-- /alatukur/Kalibrasi  --}}
              <i class="fas fa-hard-hat nav-icon"></i>
              <p>Kalibrasi</p>
            </a> 
          <li class="nav-item">
            <a href="" class="nav-link"> {{-- /alatukur/Peminjaman  --}}
              <i class="fab fa-bitcoin nav-icon"></i>
              <p>Peminjaman</p>
            </a>
          </li>
        </ul>
      </li>


      <li class="nav-item">
        <a href="/pic" class="nav-link {{ Request::is('pic*') ? 'active' : '' }}">
          <i class="nav-icon fas fa-hard-hat nav-icon"></i>
          <p>PIC</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="/lokasi" class="nav-link {{ Request::is('lokasi*') ? 'active' : '' }}">
          <i class="nav-icon fas fa-map-marker-alt"></i>
          <p>Lokasi</p>
        </a>
      </li>

    </ul>
  </nav>

</div>
<!-- /.sidebar -->
<!-- /.sidebar-menu -->