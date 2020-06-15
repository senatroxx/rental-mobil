@extends('layouts.master')

@section('content')
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Mobil</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
            <li class="breadcrumb-item">Mobil</li>
            <!-- <li class="breadcrumb-item active" aria-current="page">Blank Page</li> -->
        </ol>
    </div>

    <div class="row mb-3">
        <!-- User Terbaru -->
        <div class="col-xl-12">
            <div class="card mb-4">
                <div class="card-body">
                    <a href="{{ route('mobil.create') }}" class="btn btn-primary mb-2">Tambah Mobil</a>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Jenis</th>
                                    <th>No Polisi</th>
                                    <th>Biaya</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i = 1 @endphp
                                @foreach($mobil as $m)
                                <form action="{{ route('mobil.destroy',$m->id)}}" method="POST">
                                    @php $hasil_rupiah = "Rp. " . number_format($m->biaya,0,',','.'); @endphp
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $m->nama }}</td>
                                    <td>{{ $m->nama_jenis }}</td>
                                    <td>{{ $m->no_polisi }}</td>
                                    <td>{{ $hasil_rupiah.'/Hari' }}</td>
                                    <td><a href="{{ route('mobil.show', $m->id) }}" class="btn btn-info btn-sm">Detail</a>
                                        <a href="{{ route('mobil.edit', $m->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" class="btn btn-danger btn-sm" value="Delete">
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