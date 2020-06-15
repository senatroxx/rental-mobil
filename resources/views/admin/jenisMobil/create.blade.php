@extends('layouts.master')

@section('content')
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Jenis Mobil</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('jenismobil.index') }}">Jenis Mobil</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah</li>
        </ol>
    </div>

    <div class="row mb-3">
        <!-- User Terbaru -->
        <div class="col-xl-12">
            <div class="card mb-4">
                <div class="card-body">
                    <a href="{{ route('jenismobil.index') }}" class="btn btn-primary mb-2">Kembali</a>
                    <form method="post" action="{{ route('jenismobil.store')}}" accept-charset="UTF-8">
                        @csrf
                                <div class="form-group">
                                    <label for="nama">Nama Jenis</label>
                                    <input type="text" class="form-control" id="nama" aria-describedby="nama" name="nama_jenis">
                                </div>
                            <input type="submit" class="btn btn-primary float-right" value="Simpan">
                    </form>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection