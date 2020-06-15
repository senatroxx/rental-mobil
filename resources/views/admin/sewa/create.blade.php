@extends('layouts.master')

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Jenis Mobil</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('sewa.index') }}">Sewa</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah</li>
        </ol>
    </div>

    <div class="card mb-4">
        <div class="card-body">
            <a href="{{ route('sewa.index') }}" class="btn btn-primary mb-2">Kembali</a>
            <form method="post" action="{{ route('sewa.store')}}" accept-charset="UTF-8">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="user_id">Pilih User</label>
                            <select class="form-control form-control mb-3" name="user_id" id="user_id">
                                <option selected hidden>-</option>
                                @foreach($user as $us)
                                    <option value="{{ $us->id }}">{{ $us->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tgl_sewa">Tanggal Sewa</label>
                            <input type="date" class="form-control" id="tgl_sewa" aria-describedby="tgl_sewa" name="tgl_sewa" onchange="getDiff()">
                        </div>
                        <div class="form-group">
                            <label for="tgl_selesai">Tanggal Selesai</label>
                            <input type="date" class="form-control" id="tgl_selesai" aria-describedby="tgl_selesai" name="tgl_selesai" onchange="getDiff()">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="jml_sewa">Lama Penyewaan</label>
                            <input type="text" class="form-control" id="jml_sewa" aria-describedby="jml_sewa" disabled>
                            <input type="hidden" name="jml_sewa" id="jml_sewaHidden">
                        </div>
                        <div class="form-group">
                            <label for="mobil_id">Pilih Mobil</label>
                            <select class="form-control form-control mb-3" name="mobil_id" id="mobil_id" onchange="getDiff()">
                                <option selected hidden>-</option>
                                @foreach($mobil as $mo)
                                    @php $hasil_rupiah = "Rp. " . number_format($mo->biaya,0,',','.'); @endphp
                                    <option value="{{ $mo->id }}">{{ $mo->nama.' | '.$hasil_rupiah.'/Hari' }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="total">Total Harga</label>
                            <input type="number" class="form-control" id="total" aria-describedby="total" disabled>
                            <input type="hidden" name="total" id="totalHidden">
                        </div>
                        <input type="submit" class="btn btn-primary float-right" value="Simpan">
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection