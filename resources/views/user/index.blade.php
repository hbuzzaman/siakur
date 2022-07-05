@extends('layouts.main')

@section('isi_container')

<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data User</h1>
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

@if (session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
@endif

<div class="card">
    <div class="card-header">
        {{-- <h3 class="card-title">Tambah Lokasi</h3> --}}
        {{-- <a class="btn btn-outline-primary" href="#">
            <i class="fas fa-pencil-alt"></i>
            Tambah Lokasi
        </a> --}}
        <a href="/user/create" class="btn btn-primary" >
            {{-- <i class="fas fa-pencil-alt"></i> --}}
            <i class="fa-regular fa-square-plus"></i>
             Tambah User
        </a>
        
        {{-- <button type="button" class="btn btn-block btn-outline-primary">Tambah Lokasi</button> --}}
    </div>
     
    <div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Role</th>
                    {{-- <th style="width: 225px">Actions</th> --}}
                    <th style="width: 160px">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role }}</td>
                        <td class="project-actions text-right">
                            <form action="/user/{{ $user->username }}" method="post">
                            <a class="btn btn-info btn-sm " href="/user/{{ $user->username }}/edit">
                                <i class="fas fa-pencil-alt"></i>
                                Edit
                            </a>
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">
                                    <i class="fa-solid fa-trash-can"></i>
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    
                @endforeach
            
            </tbody>
        </table>
    </div>
    </div>
    
    {{-- <div class="card-footer clearfix">
        <ul class="pagination pagination-sm m-0 float-right">
            <li class="page-item"><a class="page-link" href="#">«</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">»</a></li>
        </ul>
    </div> --}}

</div>

@endsection