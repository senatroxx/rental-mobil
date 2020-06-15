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
        <h1 class="h3 mb-0 text-gray-800">Admin</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('list.index') }}">Admin</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah</li>
        </ol>
    </div>

    <div class="card mb-4">
        <div class="card-body">
            <a href="{{ route('list.index') }}" class="btn btn-primary mb-2">Kembali</a>
            <form method="post" action="{{ route('list.store')}}" accept-charset="UTF-8">
                <div class="row">
                @csrf
                    <div class="col-6">
                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama" aria-describedby="nama" name="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" aria-describedby="email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="telp">Telp</label>
                            <input type="number" class="form-control" id="telp" aria-describedby="telp" name="telp">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" aria-describedby="password" name="password">
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation">Confirm Password</label>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required="required" autocomplete="new-password"/>
                        </div>
                        <input type="submit" class="btn btn-primary float-right" value="Simpan">
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection