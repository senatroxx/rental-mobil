@extends('layouts.app')

@section('content')
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
            <form action="{{ route('booking.store') }}" method="post">
                @csrf
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="tgl_sewa">Tanggal Sewa</label>
                        <input type="date" class="form-control" id="tgl_sewa" aria-describedby="tgl_sewa" name="tgl_sewa" onchange="getDiff()">
                    </div>
                    <div class="form-group">
                        <label for="tgl_selesai">Tanggal Selesai</label>
                        <input type="date" class="form-control" id="tgl_selesai" aria-describedby="tgl_selesai" name="tgl_selesai" onchange="getDiff()">
                    </div>
                    <div class="form-group">
                        <label for="jml_sewa">Lama Penyewaan</label>
                        <input type="text" class="form-control" id="jml_sewa" aria-describedby="jml_sewa" disabled>
                        <input type="hidden" name="jml_sewa" id="jml_sewaHidden">
                    </div>
                </div>
                <div class="col-lg-6">
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
    </section>
@endsection
