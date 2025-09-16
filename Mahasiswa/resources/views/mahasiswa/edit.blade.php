<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: lightgray">

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">

            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <h3 class="mb-4">Edit Mahasiswa</h3>

                    <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label class="font-weight-bold">NIM</label>
                            <input type="text" 
                                   class="form-control @error('nim') is-invalid @enderror" 
                                   name="nim" 
                                   value="{{ old('nim', $mahasiswa->nim) }}" 
                                   placeholder="Masukkan NIM">
                            @error('nim')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Nama</label>
                            <input type="text" 
                                   class="form-control @error('nama') is-invalid @enderror" 
                                   name="nama" 
                                   value="{{ old('nama', $mahasiswa->nama) }}" 
                                   placeholder="Masukkan Nama">
                            @error('nama')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Kelas</label>
                            <input type="text" 
                                   class="form-control @error('kelas') is-invalid @enderror" 
                                   name="kelas" 
                                   value="{{ old('kelas', $mahasiswa->kelas) }}" 
                                   placeholder="Masukkan Kelas">
                            @error('kelas')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Prodi</label>
                            <input type="text" 
                                   class="form-control @error('prodi') is-invalid @enderror" 
                                   name="prodi" 
                                   value="{{ old('prodi', $mahasiswa->prodi) }}" 
                                   placeholder="Masukkan Prodi">
                            @error('prodi')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-md btn-primary me-3">UPDATE</button>
                        <a href="{{ route('mahasiswa.index') }}" class="btn btn-md btn-secondary">BATAL</a>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
