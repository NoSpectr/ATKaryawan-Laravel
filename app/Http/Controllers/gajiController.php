<?php

namespace App\Http\Controllers;

use App\Models\ModelGaji;
use App\Models\ModelKaryawan;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class gajiController extends Controller
{
    public function index()
    {
        $gaji = ModelGaji::with('karyawan')->get();
        return view('admin.gaji.gaji', compact('gaji')); // Mengirim data ke view
    }

    public function store(Request $request)
    {
        // Validasi data yang di-submit
        $request->validate([
            'id_karyawan' => 'required|exists:tb_karyawan,id',
            'tanggal_pembayaran' => 'required|date',
            'gaji_pokok' => 'required|numeric',
            'status_pembayaran' => 'required|in:Proses,Sukses',
        ]);

        // Menyimpan data gaji ke database
        ModelGaji::create([
            'id_karyawan' => $request->id_karyawan,
            'tanggal_pembayaran' => $request->tanggal_pembayaran,
            'gaji_pokok' => $request->gaji_pokok,
            'status_pembayaran' => $request->status_pembayaran,
        ]);

        // Redirect ke halaman daftar gaji dengan pesan sukses
        return redirect()->route('gaji')->with('success', 'Data gaji berhasil ditambahkan');
    }

    public function edit($id)
    {
        $gaji = ModelGaji::findOrFail($id);
        $karyawan = ModelKaryawan::all();
        return view('admin.gaji.gaji-edit', compact('gaji', 'karyawan'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'id_karyawan' => 'required|exists:tb_karyawan,id',
            'tanggal_pembayaran' => 'required|date',
            'gaji_pokok' => 'required|numeric',
            'status_pembayaran' => 'required|in:Proses,Sukses',
        ]);

        $gaji = ModelGaji::findOrFail($id);
        $gaji->update($validatedData);

        return redirect()->route('gaji')->with('success', 'Data gaji berhasil diperbarui');
    }

    public function destroy($id)
    {
        $gaji = ModelGaji::findOrFail($id);
        $gaji->delete();

        return redirect()->route('gaji')->with('success', 'Data gaji berhasil dihapus');
    }

    public function exportpdf()
    {
        $gaji = ModelGaji::with('karyawan')->get();
        $pdf = Pdf::loadview('admin.gaji.gaji-pdf', compact('gaji'));
        return $pdf->stream('data-gaji.pdf');
    }
}
