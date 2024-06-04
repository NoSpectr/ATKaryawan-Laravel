@extends('admin.master')
@section('title', 'Data Karyawan')
@section('content')
    <div class="pagetitle">
        <h1>Data Karyawan</h1>
    </div>
    {{-- Alert Success --}}
    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    {{-- Button Tambah dan Cetak --}}
    <div>
        <a href="{{ route('karyawan-create') }}" class="btn btn-primary active md-5 mb-3"><i class="bi bi-plus me-1"></i>Tambah
            Data</a>
        <a href="{{ route('exportpdf') }}" class="btn btn-success active md-5 mb-3"><i class="bi bi-printer me-1"></i>Cetak
            PDF</a>
    </div>

    {{-- Tabel Data Karyawan --}}
    <table class="table table-bordered datatable">
        <thead class="table-secondary">
            <tr>
                <th>No</th>
                <th>Nama Karyawan</th>
                <th>Jabatan</th>
                <th>Jenis Kelamin</th>
                <th>No. Telepon</th>
                <th>Alamat</th>
                <th>Tanggal Lahir</th>
                <th>Status Karyawan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($karyawan as $k)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $k->nama_karyawan }}</td>
                    <td>{{ $k->jabatan == 'kasir' ? 'Kasir' : ($k->jabatan == 'staffGudang' ? 'Staff Gudang' : 'Kebersihan') }}
                    </td>
                    <td>{{ $k->jk == 'L' ? 'Laki-laki' : 'Perempuan' }}</td>
                    <td>{{ $k->no_telp }}</td>
                    <td>{{ $k->alamat }}</td>
                    <td>{{ $k->ttl }}</td>
                    <td>{{ ucwords(str_replace('_', ' ', $k->status_karyawan)) }}</td>
                    <td class="d-flex align-items-center justify-content-center gap-2">
                        <a href="{{ route('karyawan-edit', $k->id) }}"><button class="btn btn-info btn-sm me-1"><i
                                    class="bi bi-pencil-square me-1"></i>Edit</button></a>
                        <a href="{{ route('karyawan-destroy', $k->id) }}" title="Hapus"
                            onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><button
                                class="btn btn-danger btn-sm"><i class="bi bi-trash2-fill"></i>Hapus</button></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
