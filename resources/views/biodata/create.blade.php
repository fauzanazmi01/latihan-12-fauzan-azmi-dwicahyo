@extends('layouts.app')

@section('content')
<div class="container bg-body p-4 rounded">
    <h2>Tambah biodata</h2>
    <form action="{{ route('biodata.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label" for="nama_lengkap">Nama</label>
            <input type="text" id="nama_lengkap" class="form-control" name="nama_lengkap" value="">
        </div>
        <div class="mb-3">
            <label class="form-label" for="nik">NIK</label>
            <input type="text" id="nik" class="form-control" name="nik" value="">
        </div>
        <div class="mb-3">
            <label class="form-label" for="umur">Umur</label>
            <input type="text" id="umur" class="form-control" name="umur" value="">
        </div>
        <div class="mb-3">
            <label class="form-label" for="alamat">Alamat</label>
            <input type="text" id="alamat" class="form-control" name="alamat" value="">
        </div>
        <div class="mt-3">
            <input class="btn btn-primary w-100" type="submit" value="Kirim"></input>
        </div>
    </form>
</div>
@endsection