@extends('layouts.main')

@section('isi_container')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Add Location</h1>
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
            <form action="/lokasi" method="post" class="form-horizontal">
                @csrf
                <div class="form-group row">
                    <label for="Name" class="col-sm-2 col-form-label">Nama Lokasi</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Nama Lokasi" autofocus value="{{ old('name') }}">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                        <div class="col-sm-10">
                            <select id="description" name="description" class="form-control custom-select @error('description') is-invalid @enderror">
                                <option value="">---Select one---</option>
                                <option value="RPA">RPA</option>
                                <option value="Kalibrasi">Kalibrasi</option>
                            </select>
                            @error('description')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                </div>
                <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                        <button type="submit" class="btn btn-info">Tambah</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection