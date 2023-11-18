@extends('layout.index')

@section('content')

<style>
    /* Custom styles */
    .navbar {
        margin-bottom: -15px; 
    }

    .table-bordered {
        margin-top: 10px; 
    }

   
</style>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark"></nav>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Toko Bunga</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Back to Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('produk/create') }}">Tambah</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-10">
    <table class="table-bordered table">
        <br>
        <tr>
            <th>Nama</th>
            <th>Stock</th>
            <th>Harga</th>
            <th>Gambar</th>
            <th colspan="2">Aksi</th>
        </tr>
        @foreach ($datas as $key=>$value)
            <tr>
                <td>{{ $value->nama}}</td>
                <td>{{ $value->stock}}</td>
                <td>{{ $value->harga}}</td>
                <td> <img src="{{asset('storage/'. $value->gambar) }}" class="product-image" style="width: 100px"> </td>
                <td class="table-actions"><a class="btn btn-info" href="{{ url('produk/' . $value->id . '/edit') }}">Update</a></td>
                <td class="table-actions">
                    <form action="{{ url('produk/' . $value->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger column-delete" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</div>
@endsection