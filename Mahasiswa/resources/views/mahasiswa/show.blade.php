<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: lightgray">

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">

            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <h3 class="mb-4">Detail Mahasiswa</h3>

                    <table class="table table-bordered">
                        <tr>
                            <th width="150">NIM</th>
                            <td>{{ $mahasiswa->nim }}</td>
                        </tr>
                        <tr>
                            <th>Nama</th>
                            <td>{{ $mahasiswa->nama }}</td>
                        </tr>
                        <tr>
                            <th>Kelas</th>
                            <td>{{ $mahasiswa->kelas }}</td>
                        </tr>
                        <tr>
                            <th>Prodi</th>
                            <td>{{ $mahasiswa->prodi }}</td>
                        </tr>
                    </table>

                    <a href="{{ route('mahasiswa.index') }}" class="btn btn-md btn-secondary mt-3">KEMBALI</a>
                </div>
            </div>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
