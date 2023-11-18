@extends('layout.index')

@section('content')
<style>
    /* Container styling */

    /* Form field styling */
    label {
        display: block;
        margin-top: 10px;
        font-weight: bold;
    }

    input[type="text"],
    input[type="file"] {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    /* Submit button styling */
    button[type="submit"] {
        background-color: #007BFF;
        color: #fff;
        padding: 10px 15px;
        text-decoration: none;
        border: none;
        border-radius: 5px;
        margin-top: 10px;
        cursor: pointer;
    }
    
    /* Variasi warna untuk elemen */
    .container {
        background-color: #f8f8f8;
    }
    label {
        color: #007BFF;
    }
    button[type="submit"] {
        background-color: #4CAF50;
    }
</style>

<div class="container">
    <form method="POST" action="{{ url('produk') }}" enctype="multipart/form-data">
        @csrf
        <label for="nama">Nama:</label>
        <input type="text" name="name">

        <label for="stock">STOCK:</label>
        <input type="text" name="stock">

        <label for="harga">HARGA:</label>
        <input type="text" name="harga">

        <label for="gambar">Gambar:</label>
        <input type="file" name="gambar">

        <button type="submit">Simpan</button>
    </form>
</div>
@endsection