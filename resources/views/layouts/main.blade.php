<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Si-AKur | PT. RPA </title>

  <!-- Font Awesome Icons -->
  {{-- <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/fontawesome-free/css/all.min.css') }}"> --}}
  <link rel="stylesheet" href="{{ asset('fas/css/all.min.css') }}">

  {{-- bootstrap --}}
  <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
  {{-- <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/bootstrap/js/bootstrap.min.js') }}"> --}}

  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('AdminLTE/dist/css/adminlte.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/summernote/summernote-bs4.min.css') }}">

</head>
{{-- <body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed"> --}}
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  {{-- <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div> --}}

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links --> 
    @include('partials.navbar')

  </nav>

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Brand Logo -->
    @include('partials.brand')

    <!-- Sidebar -->
    @include('partials.sidebar')

    
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <!-- Content Header (Page header) -->
    {{-- <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Menu Utama</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Menu Utama</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div> --}}
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        
        {{-- ISI HALAMAN PADA VIEWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWW --}}
        @yield('isi_container')


      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2022 <a href="http://rachmatperdana.co.id/">PT. Rachmat Perdana Adhimetal</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{ asset('AdminLTE/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('AdminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('AdminLTE/dist/js/adminlte.js') }}"></script>

<!-- PAGE PLUGINS -->
{{-- <!-- jQuery Mapael -->
<script src="{{ asset('AdminLTE/plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
<script src="{{ asset('AdminLTE/plugins/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('AdminLTE/plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
<script src="{{ asset('AdminLTE/plugins/jquery-mapael/maps/usa_states.min.js') }}"></script> --}}

<!-- ChartJS -->
{{-- <script src="AdminLTE/plugins/chart.js/Chart.min.js"></script> --}}

<!-- AdminLTE for demo purposes -->
<!-- script src="AdminLTE/dist/js/demo.js"></script> -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="AdminLTE/dist/js/pages/dashboard2.js"></script> -->
</body>
</html>
