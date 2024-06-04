<?php

namespace App\Http\Controllers;

use App\Models\ModelKaryawan;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class karyawanController extends Controller
{
    public function index()
    {
        $karyawan = ModelKaryawan::all();
        return view('admin.karyawan.karyawan', compact('karyawan')); // Mengirim data ke view
    }
    public function store(Request $request)
    {
        // Validasi data yang di-submit
        $request->validate([
            'nama_karyawan' => 'required|string|max:255',
            'jabatan' => 'required|in:kasir,staffGudang,kebersihan',
            'jk' => 'required|in:L,P',
            'no_telp' => 'required|string|max:15',
            'alamat' => 'required|string|max:255',
            'ttl' => 'required|date',
            'status_karyawan' => 'required|in:karyawan_tetap,karyawan_magang,karyawan_kontrak',
        ]);

        // Menyimpan data karyawan ke database
        ModelKaryawan::create([
            'nama_karyawan' => $request->nama_karyawan,
            'jabatan' => $request->jabatan,
            'jk' => $request->jk,
            'no_telp' => $request->no_telp,
            'alamat' => $request->alamat,
            'ttl' => $request->ttl,
            'status_karyawan' => $request->status_karyawan,
        ]);

        // Redirect ke halaman daftar karyawan dengan pesan sukses
        return redirect()->route('karyawan')->with('success', 'Data karyawan berhasil ditambahkan');
    }
    public function edit($id)
    {
        $karyawan = ModelKaryawan::findOrFail($id);
        return view('admin.karyawan.karyawan-edit', compact('karyawan'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama_karyawan' => 'required|string|max:255',
            'jabatan' => 'required|in:kasir,staffGudang,kebersihan',
            'jk' => 'required|in:L,P',
            'no_telp' => 'required|string|max:15',
            'alamat' => 'required|string',
            'ttl' => 'required|date',
            'status_karyawan' => 'required|in:karyawan_tetap,karyawan_magang,karyawan_kontrak',
        ]);

        $karyawan = ModelKaryawan::findOrFail($id);
        $karyawan->update($validatedData);

        return redirect()->route('karyawan')->with('success', 'Data karyawan berhasil diperbarui');
    }

    public function destroy($id)
    {
        $karyawan = ModelKaryawan::findOrFail($id);
        $karyawan->delete();

        return redirect()->route('karyawan')->with('success', 'Data karyawan berhasil dihapus');
    }

    public function exportpdf()
    {
        $karyawan = ModelKaryawan::all();
        $pdf = Pdf::loadview('admin.karyawan.karyawan-pdf', compact('karyawan'));
        return $pdf->stream('data-karyawan.pdf');
    }
}
