<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <style>
    .formCont {
      margin-top: 100px;
      max-width: 800px;
    }

    .dataForm {
      border-top: 1px solid #ccc;
      border-left: 1px solid #ccc;
      border-right: 1px solid #ccc;
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;
    }

    .formModifReset {
      border-left: 1px solid #ccc;
      border-right: 1px solid #ccc;
      border-bottom: 1px solid #ccc;
      height: 450px;
    }

    form h2 {
      background-color: grey;
      border-radius: 10px 10px 0px 0px;
    }

    label {
      font-size: 20px;
    }

    .btn-danger {
      width: 75px;
      float: right;
      margin-right: 10px;
    }

    .p-3 {
      color: white;
      background-color: grey;
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

  <main class="container formCont">
    <div class="formModifReset">
      <div class="dataForm">
        <h2 class="p-3 mb-3 border-bottom fw-bold">Form Data Mahasiswa</h2>
        <div class="col-lg-8">
          <div class="d-flex px-3 pt-3">
            <label for="inputanNama" class="text-start col-lg-6 pt-2">Nama</label>
            <input class="inputanNama text-start col-lg-6 form-control" type="text" id="inputNama" name="inputanNama" value="{{$nama}}">
          </div>

          <div class="d-flex px-3 pt-3">
            <label for="inputanNpm" class="text-start col-lg-6 pt-2">NPM</label>
            <input class="inputanNpm text-start col-lg-6 form-control" type="text" id="inputNpm" name="inputanNpm" value="{{ $npm}}">
          </div>
          <div class="d-flex px-3 pt-3">
            <label for="inputanEmail" class="text-start col-lg-6 pt-2">Email</label>
            <input class="inputanEmail text-start col-lg-6 form-control" type="text" id="inputEmail" name="inputanEmail" value="{{$email}}">
          </div>
          <div class="d-flex px-3 pt-3">
            <label for="inputanFakultas" class="text-start col-lg-6 pt-2">Fakultas</label>
            <input class="inputanFakultas text-start col-lg-6 form-control" type="text" id="inputFakultas" name="inputanFakultas" value="{{ $fakultas}}">
          </div>
          <div class="d-flex px-3 pt-3 pb-5">
            <label for="inputProdi" class="text-start col-lg-6 pt-2">Program Studi</label>
            <input class="inputanStudi text-start col-lg-6 form-control" type="text" id="inputProdi" name="inputStudi" value="{{ $prodi}}">
          </div>

        </div>

      </div>
      <button type="submit" class="btn btn-danger" onclick="resetForm()">Reset</button>
    </div>

    </div>

  </main>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.min.js"></script>

<script>
  function resetForm() {
    const inputNama = document.getElementById('inputNama');
    const inputNpm = document.getElementById('inputNpm');
    const inputEmail = document.getElementById('inputEmail');
    const inputFakultas = document.getElementById('inputFakultas');
    const inputProdi = document.getElementById('inputProdi');

    inputNama.value = '';
    inputNpm.value = '';
    inputEmail.value = '';
    inputFakultas.value = '';
    inputProdi.value = '';

  }
</script>

</html>