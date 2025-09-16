<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Data Mahasiswa</title>

    <!-- Tailwind -->
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
          crossorigin="anonymous">
</head>

<body class="bg-gray-100">

<div class="container mx-auto mt-10 mb-10 px-10">
    <div class="grid grid-cols-8 gap-4 mb-4 p-5">

        <!-- Judul -->
        <div class="col-span-4 mt-2">
            <h1 class="text-3xl font-bold">
                DAFTAR MAHASISWA
            </h1>
        </div>

        <!-- Tombol Tambah -->
        <div class="col-span-4">
            <div class="flex justify-end">
                <a href="{{ route('mahasiswa.create') }}"
                   id="add-mahasiswa-btn"
                   class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs 
                          leading-tight uppercase rounded-full shadow-md 
                          hover:bg-blue-700 hover:shadow-lg 
                          focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 
                          active:bg-blue-800 active:shadow-lg 
                          transition duration-150 ease-in-out">
                   Tambah Mahasiswa
                </a>
            </div>
        </div>
    </div>

    <!-- Flash Message -->
    <div class="bg-white p-5 rounded shadow-sm">
        @if (session('success'))
            <div class="p-3 rounded bg-green-500 text-green-100 mb-4">
                {{ session('success') }}
            </div>
        @endif

        <!-- Tabel -->
        <div class="relative overflow-x-auto">
            <table class="table table-bordered w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th class="px-6 py-3">No</th>
                        <th class="px-6 py-3">NIM</th>
                        <th class="px-6 py-3">Nama</th>
                        <th class="px-6 py-3">Jurusan</th>
                        <th class="px-6 py-3">Angkatan</th>
                        <th class="px-6 py-3">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($mahasiswa as $mhs)
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4">{{ $loop->iteration }}</td>
                            <td class="px-6 py-4">{{ $mhs->nim }}</td>
                            <td class="px-6 py-4">{{ $mhs->nama }}</td>
                            <td class="px-6 py-4">{{ $mhs->jurusan }}</td>
                            <td class="px-6 py-4">{{ $mhs->angkatan }}</td>
                            <td class="px-6 py-4">
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" 
                                      action="{{ route('mahasiswa.destroy', $mhs) }}" 
                                      method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')

                                    <!-- View -->
                                    <a href="{{ route('mahasiswa.show', $mhs) }}" 
                                       class="btn btn-success btn-sm">
                                        View
                                    </a>

                                    <!-- Edit -->
                                    <a href="{{ route('mahasiswa.edit', $mhs) }}" 
                                       id="{{ $mhs->id }}-edit-btn"
                                       class="btn btn-primary btn-sm">
                                        Edit
                                    </a>

                                    <!-- Delete -->
                                    <button type="submit"
                                            id="{{ $mhs->id }}-delete-btn"
                                            class="btn btn-danger btn-sm">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center text-sm text-gray-900 px-6 py-4">
                                Data Mahasiswa Kosong
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <!-- Pagination -->
    <div class="mt-3">
        {{ $mahasiswa->links() }}
    </div>
</div>

</body>
</html>
