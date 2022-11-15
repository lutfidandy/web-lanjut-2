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
        <h1 class="text-center mb-5">Data Dosen</h1>
        <a href="{{ route('Soal.create') }}" class="btn btn-primary mb-3">Tambah Data</a>
        <div class="card">
            <div class="card-body">
                <table class="table" style="text-align: center;">
                    <thead>
                        <th>ID</th>
                        <th>Nama MK</th>
                        <th>Dosen</th>
                        <th>Jumlah Soal</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                        @foreach ($soal as $data => $hasil )
                        <tr>
                            <th>{{ $data+1 }}</th>
                            <td>{{ $hasil->nama_mk }}</td>
                            <td>{{ $hasil->dosen }}</td>
                            <td>{{ $hasil->jumlah_soal }}</td>
                            <td>{{ $hasil->keterangan }}</td>
                            <td>
                                <form action="{{ route('Soal.destroy', $hasil->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <a href="{{ route('Soal.edit', $hasil->id) }}" class="btn btn-info">Edit</a>
                                    <button class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
