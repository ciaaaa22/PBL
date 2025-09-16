<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: lightgray">

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">

            {{-- Notifikasi sukses --}}
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <h3 class="mb-4">Daftar Mahasiswa</h3>

                    {{-- Tombol Tambah Mahasiswa --}}
                    <a href="{{ route('mahasiswa.create') }}" class="btn btn-md btn-success mb-3">+ Tambah Mahasiswa</a>

                    {{-- Tabel Data --}}
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>Prodi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($mahasiswas as $index => $mhs)
                                <tr>
                                    <td>{{ $mahasiswas->firstItem() + $index }}</td>
                                    <td>{{ $mhs->nim }}</td>
                                    <td>{{ $mhs->nama }}</td>
                                    <td>{{ $mhs->kelas }}</td>
                                    <td>{{ $mhs->prodi }}</td>
                                    <td>
                                        <a href="{{ route('mahasiswa.show', $mhs->id) }}" class="btn btn-sm btn-info">Detail</a>
                                        <a href="{{ route('mahasiswa.edit', $mhs->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                        <form action="{{ route('mahasiswa.destroy', $mhs->id) }}" method="POST" style="display:inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus data ini?')">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">Belum ada data mahasiswa</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                    {{-- Pagination --}}
                    <div class="mt-3">
                        {{ $mahasiswas->links() }}
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
