<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa; // model Mahasiswa
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class MahasiswaController extends Controller
{
    /**
     * Menampilkan form tambah mahasiswa
     */
    public function create(): View
    {
        // menampilkan form create.blade.php
        return view('mahasiswa.create');
    }

    /**
     * Menyimpan data mahasiswa baru ke database
     */
    public function store(Request $request): RedirectResponse
    {
        // validasi data form
        $request->validate([
            'nim'   => 'required|unique:mahasiswas',
            'nama'  => 'required|min:3',
            'kelas' => 'required',
            'prodi' => 'required'
        ]);

        // simpan ke database
        Mahasiswa::create([
            'nim'   => $request->nim,
            'nama'  => $request->nama,
            'kelas' => $request->kelas,
            'prodi' => $request->prodi,
        ]);

        // redirect ke halaman index mahasiswa
        return redirect()->route('mahasiswa.index')
                         ->with(['success' => 'Data Mahasiswa Berhasil Ditambahkan!']);
    }
}
