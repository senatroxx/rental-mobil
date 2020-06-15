@extends('layouts.master')

@section('content')
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
            <!-- <li class="breadcrumb-item">Pages</li>
            <li class="breadcrumb-item active" aria-current="page">Blank Page</li> -->
        </ol>
    </div>
    <div class="row mb-3">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card h-100">
            <div class="card-body">
                <div class="row align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-uppercase mb-1">Total Mobil</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $countMobil }}</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-car fa-2x text-primary"></i>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card h-100">
            <div class="card-body">
                <div class="row align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-uppercase mb-1">Total User</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $countUser }}</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-users fa-2x text-success"></i>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card h-100">
            <div class="card-body">
                <div class="row align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-uppercase mb-1">Total Sewa</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $countSewa }}</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-dollar-sign fa-2x text-info"></i>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card h-100">
            <div class="card-body">
                <div class="row align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-uppercase mb-1">Total Sewa Pending</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $countPending }}</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-hand-holding-usd fa-2x text-warning"></i>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <!-- User Terbaru -->
        <div class="col-xl-4 col-lg-5">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">User Terbaru</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i = 1 @endphp
                                @foreach($latestUser as $lu)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{$lu->name}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sewa Terbaru -->
        <div class="col-xl-8 col-lg-7">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Sewa Terbaru</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Penyewa</th>
                                    <th>Tanggal Pengambilan</th>
                                    <th>Tanggal Dikembalikan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i = 1 @endphp
                                @foreach($latestSewa as $ls)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $ls->name }}</td>
                                    <td>{{ $ls->tgl_sewa }}</td>
                                    <td>{{ $ls->tgl_selesai }}</td>
                                </tr>
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