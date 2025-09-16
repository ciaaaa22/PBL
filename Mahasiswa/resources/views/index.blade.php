@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Daftar Mahasiswa</h2>

    <!-- tampilkan pesan sukses kalau ada -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>NIM</th>
                <th>Nama Mahasiswa</th>
                <th>Email</th>
                <th>Angkatan</th>
                <th>Role</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($mahasiswa as $mhs)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $mhs->nim }}</td>
                <td>{{ $mhs->nama_mahasiswa }}</td>
                <td>{{ $mhs->email }}</td>
                <td>{{ $mhs->angkatan }}</td>
                <td>{{ $mhs->role }}</td>
                <td>
                    <!-- tombol hapus -->
                    <form action="{{ route('mahasiswa.destroy', $mhs->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"
                            onclick="return confirm('Yakin mau hapus data ini?')">
                            Hapus
                        </button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="7" class="text-center">Belum ada data mahasiswa</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
