<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <style>
    .carousel-img {
      max-height: 750px;
      object-fit: cover;
      width: 100%;
    }

    .carousel-caption {
      background-color: #14141480;
      color: white;
      padding: 30px;
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
            <a class="nav-link active" aria-current="page" href="{{url('home')}}">Home</a>
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

  <main>
    <div id="carouselExampleCaptions" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{ asset('images/dere.jpg') }}" class="carousel-img d-block" alt="...">
          <div class="carousel-caption">
            <h5>Dere</h5>
            <p>Modul 4 - Laravel MVC</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{ asset('images/nadin.jpg') }}" class="carousel-img d-block" alt="...">
          <div class="carousel-caption">
            <h5>Nadin</h5>
            <p>Modul 4 - Laravel MVC</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{ asset('images/feby.jpg') }}" class="carousel-img d-block" alt="...">
          <div class="carousel-caption">
            <h5>Feby</h5>
            <p>Modul 4 - Laravel MVC</p>
          </div>
        </div>
      </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </main>





</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.min.js"></script>




</html>