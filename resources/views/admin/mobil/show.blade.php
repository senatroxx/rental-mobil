@extends('layouts.master')

@section('content')
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Mobil</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('mobil.index') }}">Mobil</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail</li>
        </ol>
    </div>

    <div class="row mb-3">
        <!-- User Terbaru -->
        <div class="col-xl-12">
            <div class="card mb-4">
                <div class="card-body">
                    <a href="{{ route('mobil.index') }}" class="btn btn-primary mb-2">Kembali</a>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="customFile">Foto Mobil</label>
                                <img src="{{ asset('img/car/'.$mobil[0]['gambar']) }}" alt="" class="img-thumbnail">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="nama">Nama Mobil</label>
                                <input type="text" class="form-control" id="nama" aria-describedby="nama" name="nama" value="{{ $mobil[0]['nama'] }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="jenis_id">Jenis Mobil</label>
                                <select class="form-control mb-3" name="jenis_id" id="jenis_id" disabled>
                                    @foreach($jenisMobil as $jm)
                                        <option value="{{ $jm->id }}" @if($jm->id == $mobil[0]['jenis_id']) {{ 'selected' }} @endif>{{ $jm->nama_jenis }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="no_polisi">No Polisi</label>
                                <input type="text" class="form-control" id="no_polisi" aria-describedby="no_polisi" name="no_polisi" value="{{ $mobil[0]['no_polisi'] }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="tahun">Tahun</label>
                                <input type="Number" class="form-control" id="tahun" aria-describedby="tahun" name="tahun" value="{{ $mobil[0]['tahun'] }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="biaya">Biaya per Hari</label>
                                <input type="number" class="form-control" id="biaya" aria-describedby="biaya" name="biaya" value="{{ $mobil[0]['biaya'] }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="transmisi">Transmisi</label>
                                <input type="text" class="form-control" id="transmisi" aria-describedby="transmisi" name="transmisi" value="{{ $mobil[0]['transmisi'] }}" disabled>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

@endsection