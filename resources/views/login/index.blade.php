<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Si Akur | {{ $title }}</title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('fas/css/all.min.css') }}">
  {{-- bootstrap --}}
  <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('AdminLTE/dist/css/adminlte.min.css') }}">

</head>
<body class="hold-transition login-page">

    
    
<div class="login-box">
        @if(session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                {{-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> --}}
            </div>
        @endif
        <!-- /.login-logo -->
  <div class="card card-outline card-success">
    <div class="card-header text-center">
      {{-- <a href="" class="h1"><b>SI</b> Akur</a> --}}
      <h1><b>SI</b> Akur</h1>
      {{-- <span>Welcome Back!</span> --}}
    </div> 
    <div class="card-body">

      <form action="/login" method="post">
        @csrf
        <div class="form-floating mb-3">
            <input type="text" name="username" class="form-control  @error('username') is-invalid @enderror" id="username" placeholder="Username" autofocus value="{{ old('username') }}">
            <label for="Password">Username</label>
            @error('username')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-floating mb-3">
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror " id="Password" placeholder="Password" >
            <label for="Password">Password</label>
            @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>


        <div class="row">
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<script src="{{ asset('AdminLTE/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('AdminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('AdminLTE/dist/js/adminlte.js') }}"></script>
</body>
</html>
