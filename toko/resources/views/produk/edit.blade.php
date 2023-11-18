@extends('layout.index')

@section('content')
<style>
    /* Container styling */
    .form-container {
        padding: 20px;
        margin: 20px;
        background-color: #f8f8f8;
        border-radius: 10px;
        width: 300px;
        margin: 0 auto; /* This centers the container */
    }

    /* Form field styling */
    .form-container label {
        display: block;
        margin-top: 10px;
        font-weight: bold;
        color: #007BFF;
    }

    .form-container input[type="text"] {
        width: calc(100% - 22px); /* Considering padding and border */
        padding: 10px;
        margin-top: 5px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box; /* Consider padding in width calculation */
    }

    /* Submit button styling */
    .form-container button[type="submit"] {
        background-color: #4CAF50;
        color: #fff;
        padding: 10px 15px;
        text-decoration: none;
        border: none;
        border-radius: 5px;
        margin-top: 10px;
        cursor: pointer;
        width: 100%;
    }
</style>
<br>
<div class="form-container">
    <form method="POST" action="{{ url('produk/'.$model->id) }}">
        @csrf
        @method('PUT')

        <label for="nama">Nama:</label> 
        <input type="text" name="nama" value="{{ $model->nama }}" required>

        <label for="stock">STOCK:</label>
        <input type="text" name="stock" value="{{ $model->stock }}" required>

        <label for="harga">HARGA:</label>
        <input type="text" name="harga" value="{{ $model->harga }}" required>

        <button type="submit">Simpan</button>
    </form>
</div>
@endsection
