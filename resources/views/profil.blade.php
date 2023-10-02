<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <style>
    .custom-card {
      max-width: 750px;
      margin: 0 auto;
    }

    .profilCont {
      margin-top: 100px;
    }

    .card-body {
      padding-left: 30px
    }

    .dataForm p {
      margin-bottom: 2px;
    }

    .btnFormData {
      margin-top: 20px;
    }

    img {
      border: 5px solid black;
      border-radius: 110%;
      height: 200px;
      width: 200px
    }

    .imgProfil {
      border-right: 1px solid #ccc;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-dark bg-dark" aria-label="First navbar example">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">UGD4_B_11320</a>
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="navbar-collapse collapse" id="navbarsExample01">
        <ul class="navbar-nav me-auto mb-2">
          <li class="nav-item">
            <a class="nav-link active"="page" href="{{url('home')}}">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ url('profil') }}">Profile</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" href="{{ url('form') }}">Form</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <main class="container profilCont">
    <div class="card mb-3 custom-card">
      <div class="row g-0">
        <div class="col-md-4 d-flex justify-content-center align-items-center imgProfil">
          <img src="./images/me.jpg" class="img">
        </div>

        <div class="col-md-8">
          <div class="card-body">
            <h1 class="card-title">{{ $nama }}</h1>
            <p class="card-text">{{ $status }}</p>
            <div class="dataForm">
              <p><strong>Alamat : </strong> {{ $alamat }}</p>
              <p><strong>Email : </strong>{{ $email }}</p>
              <p><strong>Telepon : </strong>{{ $telepon }}</p>
              <p><strong>Hobi : </strong>{{ $hobi }}</p>
            </div>
            <a href="{{url('form')}}"><button type="button" class="btn btn-primary btnFormData">Form Data Mahasiswa</button></a>
          </div>
        </div>
      </div>
    </div>
  </main>





</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.min.js"></script>

</html>