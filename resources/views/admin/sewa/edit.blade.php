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
            <li class="breadcrumb-item active" aria-current="page">Detail</li>
        </ol>
    </div>

    <div class="card mb-4">
        <div class="card-body">
            <a href="{{ route('sewa.index') }}" class="btn btn-primary mb-2">Kembali</a>
            <form method="post" action="{{ route('sewa.update', $sewa[0]['id'])}}" accept-charset="UTF-8">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="user_id">Pilih User</label>
                            <select class="form-control form-control mb-3" name="user_id" id="user_id">
                                <option selected hidden>-</option>
                                @foreach($user as $us)
                                    <option value="{{ $us->id }}" @if($us->id == $sewa[0]['user_id']) {{ 'selected' }} @endif>{{ $us->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tgl_sewa">Tanggal Sewa</label>
                            <input type="date" class="form-control" id="tgl_sewa" aria-describedby="tgl_sewa" name="tgl_sewa" onchange="getDiff()" value="{{ $sewa[0]['tgl_sewa'] }}">
                        </div>
                        <div class="form-group">
                            <label for="tgl_selesai">Tanggal Selesai</label>
                            <input type="date" class="form-control" id="tgl_selesai" aria-describedby="tgl_selesai" name="tgl_selesai" onchange="getDiff()" value="{{ $sewa[0]['tgl_selesai'] }}">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="jml_sewa">Lama Penyewaan</label>
                            <input type="text" class="form-control" id="jml_sewa" aria-describedby="jml_sewa" name="jml_sewa" disabled value="{{ $sewa[0]['jml_sewa'].' Hari' }}">
                            <input type="hidden" name="jml_sewa" id="jml_sewaHidden" value="{{ $sewa[0]['jml_sewa'] }}">
                        </div>
                        <div class="form-group">
                            <label for="mobil_id">Pilih Mobil</label>
                            <select class="form-control form-control mb-3" name="mobil_id" id="mobil_id" onchange="getDiff()">
                                @foreach($mobil as $mo)
                                    @php $hasil_rupiah = "Rp. " . number_format($mo->biaya,0,',','.'); @endphp
                                    <option value="{{ $mo->id }}" @if($mo->id == $sewa[0]['mobil_id']) {{ 'selected' }} @endif>{{ $mo->nama.' | '.$hasil_rupiah.'/Hari' }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="total">Total Harga</label>
                            <input type="number" class="form-control" id="total" aria-describedby="total" disabled value="{{ $sewa[0]['total'] }}">
                            <input type="hidden" name="total" id="totalHidden" value="{{ $sewa[0]['total'] }}">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Simpan" class="btn btn-primary float-right">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection