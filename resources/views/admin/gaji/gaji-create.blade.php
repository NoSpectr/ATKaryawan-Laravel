@extends('admin.master')
@section('title', 'Tambah Data Gaji')
@php
    $karyawan = App\Models\ModelKaryawan::all();
@endphp
@section('content')
    <div class="content-form">
        <h4 class="fw-semibold mb-4">Form Data Gaji</h4>
        {{-- Form --}}
        <div class="form-add p-4 bg-white rounded-4">
            <form action="{{ route('gaji.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="id_karyawan" class="form-label">Nama Karyawan <span>*</span></label>
                    <select name="id_karyawan" id="id_karyawan" class="form-select" required>
                        <option value="" disabled selected>Pilih Nama Karyawan</option>
                        @foreach ($karyawan as $k)
                            <option value="{{ $k->id }}">{{ $k->nama_karyawan }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <label for="tanggal_pembayaran" class="form-label">Tanggal Pembayaran <span>*</span></label>
                    <input type="date" class="form-control input" name="tanggal_pembayaran" id="tanggal_pembayaran"
                        required>
                </div>
                <div class="mb-4">
                    <label for="gaji_pokok" class="form-label">Gaji Pokok <span>*</span></label>
                    <input type="number" step="0.01" class="form-control input" name="gaji_pokok" id="gaji_pokok"
                        placeholder="Masukan gaji pokok" required>
                </div>
                <div class="mb-4">
                    <label for="status_pembayaran" class="form-label">Status Pembayaran <span>*</span></label>
                    <select name="status_pembayaran" id="status_pembayaran" class="form-select" required>
                        <option value="" disabled selected>Pilih Status Pembayaran</option>
                        <option value="Proses">Proses</option>
                        <option value="Sukses">Sukses</option>
                    </select>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="button" onclick="history.back()" class="btn btn-secondary">Kembali</button>
                </div>
            </form>
        </div>
    </div>
@endsection
