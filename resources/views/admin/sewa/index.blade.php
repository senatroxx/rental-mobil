@extends('layouts.master')

@section('content')
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Sewa</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
            <li class="breadcrumb-item">Sewa</li>
            <!-- <li class="breadcrumb-item active" aria-current="page">Blank Page</li> -->
        </ol>
    </div>

    <div class="row mb-3">
        <!-- User Terbaru -->
        <div class="col-xl-12">
            <div class="card mb-4">
                <div class="card-body">
                    <a href="{{ route('sewa.create') }}" class="btn btn-primary mb-2">Tambah sewa</a>
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
                                <form action="{{ route('sewa.destroy',$s->sewaId)}}" method="POST">
                                    @csrf
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{$s->userName}}</td>
                                    <td>{{$s->tgl_sewa}}</td>
                                    <td>@if($s->acc == 0) {{ 'Tidak' }} @elseif($s->acc == 1) {{ 'Ya' }} @endif</td>
                                    <td>@if($s->done == 0) {{ 'Tidak' }} @elseif($s->done == 1) {{ 'Ya' }} @endif</td>
                                    <td><a href="{{ route('sewa.show', $s->sewaId) }}" class="btn btn-info btn-sm">Detail</a>
                                        <a href="{{ route('sewa.edit', $s->sewaId) }}" class="btn btn-warning btn-sm">Edit</a>
                                        @method('DELETE')
                                        <input type="submit" class="btn btn-danger btn-sm mt-1" value="Delete">
                                        <a href="{{ route('sewa.acc', $s->sewaId) }}" class="btn btn-success btn-sm mt-1 @if($s->acc == 1) {{ 'disabled' }} @endif">Terima</a>
                                        <a href="{{ route('sewa.done', $s->sewaId) }}" class="btn btn-secondary btn-sm mt-1 @if($s->acc == 0 || $s->done == 1) {{ 'disabled' }} @endif">Selesai</a>
                                    </td>
                                </tr>
                                </form>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection