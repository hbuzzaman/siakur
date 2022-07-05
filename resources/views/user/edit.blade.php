@extends('layouts.main')

@section('isi_container')

<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit User</h1>
          </div><!-- /.col -->
          {{-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Menu Utama</li>
            </ol>
          </div><!-- /.col --> --}}
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<!-- /.content-header -->

<div class="card col-lg-8">
    <div class="card-body">
        <div class="tab-content">
            <form action="/user/{{ $user->username }}" method="post" class="form-horizontal">
                @method('put')
                @csrf
                <div class="form-group row">
                    <label for="Name" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Name" autofocus value="{{ old('name',$user->name) }}">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Username" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control @error('username') is-invalid @enderror" id="name" name="username" placeholder="Username" autofocus value="{{ old('username',$user->username) }}">
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email" autofocus value="{{ old('email',$user->email) }}">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="role" class="col-sm-2 col-form-label">Select</label>
                    <div class="col-sm-10">
                        <select class="form-control @error('role') is-invalid @enderror" name="role" id="">
                            @if (old('role',$user->role) == 'Admin')
                                <option value="">---Select one---</option>
                                <option value="Admin" selected>Admin</option>
                                <option value="QC">QC</option>
                                <option value="Manager">Manager</option>
                                
                            @elseif(old('role',$user->role) == 'QC')
                                <option value="">---Select one---</option>
                                <option value="Admin">Admin</option>
                                <option value="QC" selected>QC</option>
                                <option value="Manager">Manager</option>
                            @else
                                <option value="">---Select one---</option>
                                <option value="Admin">Admin</option>
                                <option value="QC">QC</option>
                                <option value="Manager" selected>Manager</option>
                            @endif
                        </select>
                        @error('role')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                {{-- <div class="form-group row">
                    <label for="Email" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Email" autofocus value="{{ old('password',$user->password) }}">
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div> --}}
                

                <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                        <button type="submit" class="btn btn-info">Edit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection