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

        <h5 class="card-title fw-bolder mb-3">Ubah Data Konter</h5>

        <form method="post" action="{{ route('konter_hp.update', $data->id_toko) }}">
            @csrf
            <div class="mb-3">
                <label for="id_toko" class="form-label">ID Toko</label>
                <input type="text" class="form-control" id="id_toko" name="id_toko" value="{{ $data->id_toko }}">
            </div>
            <div class="mb-3">
                <label for="nama_toko" class="form-label">Nama Toko</label>
                <input type="text" class="form-control" id="nama_toko" name="nama_toko" value="{{ $data->nama_toko }}">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $data->alamat }}">
            </div>
            <div class="mb-3">
                <label for="no_handphone" class="form-label">No Handphone</label>
                <input type="text" class="form-control" id="handphone" name="no_handphone" value="{{ $data->no_handphone }}">
            </div>
            <div class="mb-3">
                <label for="id_customer" class="form-label">ID Customer</label>
                <input type="text" class="form-control" id="id_customer" name="id_customer" value="{{ $data->id_customer }}">
            </div>
            <div class="mb-3">
                <label for="id_supplier" class="form-label">ID Supplier</label>
                <input type="text" class="form-control" id="id_supplier" name="id_supplier" value="{{ $data->id_supplier }}">
            </div>
            <div class="text-center">
                <input type="submit" class="btn btn-primary" value="Ubah" />
            </div>
        </form>
    </div>
</div>

@stop
