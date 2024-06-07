@extends('admin.master')
@section('title', 'Data Gaji')
@section('content')
    <div class="pagetitle">
        <h1>Data Gaji</h1>
    </div>
    {{-- Alert Success --}}
    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    {{-- Button Tambah dan Cetak --}}
    <div>
        <a href="{{ route('gaji-create') }}" class="btn btn-primary active md-5 mb-3"><i class="bi bi-plus me-1"></i>Tambah
            Data</a>
        <a href="{{ route('exportpdf') }}" class="btn btn-success active md-5 mb-3"><i class="bi bi-printer me-1"></i>Cetak
            PDF</a>
    </div>

    {{-- Tabel Data Gaji --}}
    <table class="table table-bordered datatable">
        <thead class="table-secondary">
            <tr>
                <th>No</th>
                <th>Nama Karyawan</th>
                <th>Jabatan</th>
                <th>Tanggal Pembayaran</th>
                <th>Gaji Pokok</th>
                <th>Status Pembayaran</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($gaji as $g)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $g->karyawan->nama_karyawan }}</td>
                    <td>{{ $g->karyawan->jabatan == 'kasir' ? 'Kasir' : ($g->karyawan->jabatan == 'staffGudang' ? 'Staff Gudang' : 'Kebersihan') }}
                    </td>
                    <td>{{ $g->tanggal_pembayaran }}</td>
                    <td>{{ 'Rp ' . number_format($g->gaji_pokok, 0, ',', '.') }}</td>
                    <td>{{ $g->status_pembayaran == 'Proses' ? 'Proses' : 'Sukses' }}</td>
                    <td class="d-flex align-items-center justify-content-center gap-2">
                        <a href="{{ route('gaji-edit', $g->id) }}"><button class="btn btn-info btn-sm me-1"><i
                                    class="bi bi-pencil-square me-1"></i>Edit</button></a>
                        <form action="{{ route('gaji-destroy', $g->id) }}" method="GET"
                            onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm"><i class="bi bi-trash2-fill"></i>Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
