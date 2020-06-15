@extends('layouts.app')

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
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>SEWA MOBIL SEKARANG JUGA</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Tidak ada kata terlambat untuk menyewa mobil.</p>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>

    <section id="car-list-area" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                <form method="post" action="{{ route('booking.update', $sewa->id)}}" accept-charset="UTF-8">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="tgl_sewa">Tanggal Sewa</label>
                        <input type="date" class="form-control" id="tgl_sewa" aria-describedby="tgl_sewa" name="tgl_sewa" onchange="getDiff()" value="{{ $sewa->tgl_sewa }}">
                    </div>
                    <div class="form-group">
                        <label for="tgl_selesai">Tanggal Selesai</label>
                        <input type="date" class="form-control" id="tgl_selesai" aria-describedby="tgl_selesai" name="tgl_selesai" onchange="getDiff()" value="{{ $sewa->tgl_selesai }}">
                    </div>
                    <div class="form-group">
                        <label for="jml_sewa">Lama Penyewaan</label>
                        <input type="text" class="form-control" id="jml_sewa" aria-describedby="jml_sewa" name="jml_sewa" disabled value="{{ $sewa->jml_sewa.' Hari' }}">
                        <input type="hidden" name="jml_sewa" id="jml_sewaHidden" value="{{ $sewa->jml_sewa }}">
                    </div>
                    <div class="form-group">
                        <label for="mobil_id">Pilih Mobil</label>
                        <select class="form-control form-control mb-3" name="mobil_id" id="mobil_id" onchange="getDiff()">
                            @foreach($mobil as $mo)
                                @php $hasil_rupiah = "Rp. " . number_format($mo->biaya,0,',','.'); @endphp
                                <option value="{{ $mo->id }}" @if($mo->id == $sewa->mobil_id) {{ 'selected' }} @endif>{{ $mo->nama.' | '.$hasil_rupiah.'/Hari' }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="total">Total Harga</label>
                        <input type="text" class="form-control" id="total" aria-describedby="total" disabled value="{{ 'Rp. '.number_format($sewa->total,0,',','.') }}">
                        <input type="hidden" name="total" id="totalHidden" value="{{ $sewa->total }}">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Simpan" class="btn btn-primary float-right">
                    </div>
                </form>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <a href="{{ route('booking.index') }}" class="btn btn-primary d-block">Kembali</a>
                        <a href="{{ route('booking.index') }}" class="btn btn-primary d-block mt-2">List Sewa</a>
                        <a href="{{ route('booking.pending') }}" class="btn btn-primary d-block mt-2">Sewa Pending</a>
                        <a href="{{ route('booking.berjalan') }}" class="btn btn-primary d-block mt-2">Sewa Berjalan</a>
                        <a href="{{ route('booking.selesai') }}" class="btn btn-primary d-block mt-2">Sewa Selesai</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
