<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
      body {
        padding-top: 20px; /* Jarak atas dari navbar */
        padding-left: 15px; /* Jarak kiri */
        padding-right: 15px; /* Jarak kanan */
      }
    </style>
  </head>
  <body>
    <nav data-bs-theme="dark" class="navbar navbar-blue bg-body-tertiary mb-4">
      <div class="container-fluid">
        <a class="navbar-brand">TOKO BUNGA</a>
        <a href="{{route('loginview')}}">
          <button class="btn btn-outline-success" type="submit">Login admin</button>        
        </a>
      </div>
    </nav>
    <div class="row">
      @foreach ($datas as $item)
          <div class="col-md-4 mb-4"> <!-- Adjust col size based on your preference -->
              <div class="card">
                  <img src="{{asset('storage/'. $item->gambar) }}" class="card-img-top" alt="...">
                  <div class="card-body">
                      <h5 class="card-title">Nama:{{$item->nama}}</h5>
                      <p class="card-text">STOCK : {{$item->stock}}</p>
                      <p class="card-text">harga : {{$item-> harga}}</p>
                  </div>
              </div>
          </div>
      @endforeach
  </div>   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
