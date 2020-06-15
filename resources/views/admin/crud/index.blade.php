@extends('layouts.master')

@section('content')
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Admin List</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
            <li class="breadcrumb-item">Admin</li>
            <!-- <li class="breadcrumb-item active" aria-current="page">Blank Page</li> -->
        </ol>
    </div>

    <div class="row mb-3">
        <!-- User Terbaru -->
        <div class="col-xl-12">
            <div class="card mb-4">
                <div class="card-body">
                    <a href="{{ route('list.create') }}" class="btn btn-primary mb-2">Tambah admin</a>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Telp</th>
                                    <th width="20%">Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i = 1 @endphp
                                @foreach($admin as $ad)
                                <form action="{{ route('list.destroy',$ad->id)}}" method="POST">
                                    @csrf
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{$ad->name}}</td>
                                    <td>{{$ad->email}}</td>
                                    <td>{{$ad->telp}}</td>
                                    <td>@method('DELETE')
                                        <input type="submit" class="btn btn-danger btn-sm mt-1" value="Delete">
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