@extends('konter_hp.layout')

@section('content')

@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)

        <li>{{ $error }}</li>

        @endforeach
    </ul>
</div>
@endif

<div class="card mt-4">
    <div class="card-body">

        <h5 class="card-title fw-bolder mb-3">Tambah Konter</h5>

        <form method="post" action="{{ route('konter_hp.store') }}">
            @csrf
            <div class="mb-3">
                <label for="id_toko" class="form-label">ID Toko</label>
                <input type="text" class="form-control" id="id_toko" name="id_toko">
            </div>
            <div class="mb-3">
                <label for="nama_toko" class="form-label">Nama Toko</label>
                <input type="text" class="form-control" id="nama_toko" name="nama_toko">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat">
            </div>
            <div class="mb-3">
                <label for="no_handphone" class="form-label">No HP</label>
                <input type="text" class="form-control" id="no_handphone" name="no_handphone">
            </div>
            <div class="mb-3">
                <label for="id_customer" class="form-label">ID Customer</label>
                <input type="text" class="form-control" id="id_customer" name="id_customer">
            </div>
            <div class="mb-3">
                <label for="id_supplier" class="form-label">ID Suppliere</label>
                <input type="text" class="form-control" id="id_supplier" name="id_supplier">
                <div class="text-center">
                <input type="submit" class="btn btn-primary" value="Tambah" />
            </div>
        </form>
    </div>
</div>

@stop
