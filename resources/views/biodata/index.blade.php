@extends('layouts.app')

@section('content')
<div class="container bg-body p-4 rounded">
    <div class="d-flex">
        <h2 class="me-2">Daftar biodata</h2>
        <a class="btn btn-primary float-right" href="{{ route('biodata.create') }}">New</a>
    </div>
    <div class="justify-content-center d-flex align-items-center">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">NIK</th>
                    <th scope="col">Umur</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach ($biodataItems as $item)
                    <tr>
                        <th scope="col">{{ $i }}</th>
                        <td>{{ $item->nama_lengkap }}</td>
                        <td>{{ $item->nik }}</td>
                        <td>{{ $item->umur }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>
                            <a class="btn btn-primary me-2" href="{{ route('biodata.edit', ['biodatum' => $item->id]) }}">Edit</a>
                            <form action="{{ route('biodata.destroy', ['biodatum' => $item->id]) }}" class="d-inline" method="POST">
                                @csrf
                                <input type="hidden" name="_method" value="delete" />
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr
                @php
                    $i++;
                @endphp
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection