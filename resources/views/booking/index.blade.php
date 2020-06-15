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
            <div class="row">
                <div class="col-lg-8">
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Penyewa</th>
                                    <th>Tanggal Sewa</th>
                                    <th>Acc</th>
                                    <th>Selesai</th>
                                    <th width="20%">Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i = 1 @endphp
                                @foreach($sewa as $s)
                                <form action="{{ route('booking.destroy',$s->sewaId)}}" method="POST">
                                    @csrf
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{$s->userName}}</td>
                                    <td>{{$s->tgl_sewa}}</td>
                                    <td>@if($s->acc == 0) {{ 'Tidak' }} @elseif($s->acc == 1) {{ 'Ya' }} @endif</td>
                                    <td>@if($s->done == 0) {{ 'Tidak' }} @elseif($s->done == 1) {{ 'Ya' }} @endif</td>
                                    <td><a href="{{ route('booking.show', $s->sewaId) }}" class="btn btn-info btn-sm">Detail</a>
                                        <a href="{{ route('booking.edit', $s->sewaId) }}" class="btn btn-warning btn-sm">Edit</a>
                                        @method('DELETE')
                                        <input type="submit" class="btn btn-danger btn-sm mt-1" value="Delete">
                                    </td>
                                </tr>
                                </form>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <a href="{{ route('booking.index') }}" class="btn btn-primary d-block">List Sewa</a>
                        <a href="{{ route('booking.pending') }}" class="btn btn-primary d-block mt-2">Sewa Pending</a>
                        <a href="{{ route('booking.berjalan') }}" class="btn btn-primary d-block mt-2">Sewa Berjalan</a>
                        <a href="{{ route('booking.selesai') }}" class="btn btn-primary d-block mt-2">Sewa Selesai</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
