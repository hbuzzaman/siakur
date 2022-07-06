@extends('layouts.main')

@section('isi_container')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Add Alat Ukur</h1>
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
            <form action="/alatukur" method="post" class="form-horizontal">
                @csrf
                <div class="form-group row">
                    <label for="Name" class="col-sm-2 col-form-label">Nama Alat</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Nama Alat Ukur" autofocus value="{{ old('name') }}">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="no_seri" class="col-sm-2 col-form-label">No Seri</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control @error('no_seri') is-invalid @enderror" id="no_seri" name="no_seri" placeholder="No Seri" autofocus value="{{ old('no_seri') }}">
                        @error('no_seri')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pic_id" class="col-sm-2 col-form-label">PIC</label>
                        <div class="col-sm-10">
                            <select id="pic_id" name="pic_id" class="form-control custom-select @error('pic_id') is-invalid @enderror">
                                    <option value="">---Select one---</option>
                                @foreach ( $pics as $pic )
                                    <option value="{{ $pic->id }}">{{ $pic->name }}</option>
                                @endforeach
                            </select>
                            @error('pic_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                </div>
                <div class="form-group row">
                    <label for="location" class="col-sm-2 col-form-label">Lokasi</label>
                        <div class="col-sm-10">
                            <select id="location_id" name="location_id" class="form-control custom-select @error('location_id') is-invalid @enderror">
                                <option value="">---Select one---</option>
                                @foreach ($locations as $location)
                                    <option value="{{ $location->id }}">{{ $location->name }}</option>
                                @endforeach
                            </select>
                            @error('location_id')
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