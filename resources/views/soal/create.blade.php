<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Soal015</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        body{
            background-color: rgb(17 24 39);
        }
        h1{
            color: white
        }
    </style>
  </head>
  <body>


    <div class="container">
        <h1 class="text-center mb-5">Tambah Data Dosen</h1>
        <a href="{{ route('Soal.index') }}" class="btn btn-primary mb-3">Data Dosen</a>
        <div class="card">
            <div class="card-body">
                <form action="{{ route('Soal.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nama_mk" class="form-label">Nama Mata Kuliah</label>
                        <input type="text" class="form-control" id="nama_mk" name="nama_mk" autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label for="dosen" class="form-label">Nama Dosen</label>
                        <input type="text" class="form-control" id="dosen" name="dosen" autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label for="jumlah_soal" class="form-label">Jumlah Soal</label>
                        <input type="text" class="form-control" id="jumlah_soal" name="jumlah_soal" autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label for="keterangan" class="form-label">Keterangan</label>
                        <input type="text" class="form-control" id="keterangan" name="keterangan" autocomplete="off">
                    </div>
                    <button type="submit" class="btn btn-primary float-end">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
