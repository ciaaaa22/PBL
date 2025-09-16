<?php
namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class MahasiswaController extends Controller
{
    // Menampilkan daftar mahasiswa
    public function index(): View
    {
        $mahasiswas = Mahasiswa::latest()->paginate(10);
        return view('mahasiswa.index', compact('mahasiswas'));
    }

    // Menampilkan form tambah mahasiswa
    public function create(): View
    {

        // menampilkan form create.blade.php
        return view('mahasiswa.create');

    }

    // Menyimpan data mahasiswa baru
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'nim'   => 'required|unique:mahasiswas',
            'nama'  => 'required|min:3',
            'kelas' => 'required',
            'prodi' => 'required'
        ]);
        Mahasiswa::create($validated);
        return redirect()->route('mahasiswa.index')
                         ->with(['success' => 'Data Mahasiswa Berhasil Ditambahkan!']);
    }

    // Menampilkan detail mahasiswa
    public function show(Mahasiswa $mahasiswa): View
    {
        return view('mahasiswa.show', compact('mahasiswa'));
    }

    // Menampilkan form edit mahasiswa
    public function edit(Mahasiswa $mahasiswa): View
    {
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    // Update data mahasiswa
    public function update(Request $request, Mahasiswa $mahasiswa): RedirectResponse
    {
        $validated = $request->validate([
            'nim'   => 'required|unique:mahasiswas,nim,' . $mahasiswa->id,
            'nama'  => 'required|min:3',
            'kelas' => 'required',
            'prodi' => 'required'
        ]);
        $mahasiswa->update($validated);
        return redirect()->route('mahasiswa.index')
                         ->with(['success' => 'Data Mahasiswa Berhasil Diupdate!']);
    }

    // Hapus data mahasiswa
    public function destroy(Mahasiswa $mahasiswa): RedirectResponse
    {
        $mahasiswa->delete();
        return redirect()->route('mahasiswa.index')
                         ->with(['success' => 'Data Mahasiswa Berhasil Dihapus!']);
    }
}
