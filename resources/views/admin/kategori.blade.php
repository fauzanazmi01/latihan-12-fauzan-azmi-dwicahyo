@extends('layouts.app')

@section('content')
<div class="container bg-body p-4 rounded">
    @auth
        <h3>Hi, {{ auth()->user()->name }}</h3>
        <h1>Daftar Kategori</h1>
    
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama Kategori</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Harga Diskon</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach ($kategori as $kategoriItem)
                    @foreach ($kategoriItem['items'] as $produkItem)
                    <tr class="{{ ($produkItem['discount'] >= 0.65) ? 'table-success' : '' }}">
                        <th scope="col">{{ $i }}</th>
                        <td>{{ $kategoriItem['name'] }}</td>
                        <td>{{ $produkItem['name'] }}</td>
                        <td>Rp{{ number_format($produkItem['price'], 0, ',', '.') }}</td>
                        <td>Rp{{ number_format((1 - $produkItem['discount']) * $produkItem['price'], 0, ',', '.') }}</td>
                    </tr>
                    @php
                        $i++;
                    @endphp
                    @endforeach
                @endforeach
            </tbody>
        </table>
    @endauth

    @guest
        Silakan login terlebih dahulu!
    @endguest

</div>
@endsection