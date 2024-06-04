@extends('admin.master')
@section('title', 'Tambah Data Karyawan')
@section('content')
    <div class="content-form">
        <h4 class="fw-semibold mb-4">Form Data Karyawan</h4>
        {{-- Form --}}
        <div class="form-add p-4 bg-white rounded-4">
            <form action="{{ route('karyawan.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="nama_karyawan" class="form-label">Nama Karyawan <span>*</span></label>
                    <input type="text" class="form-control input" name="nama_karyawan" id="nama_karyawan"
                        placeholder="Masukan nama karyawan" required>
                </div>
                <div class="mb-4">
                    <label for="jabatan" class="form-label">Jabatan <span>*</span></label>
                    <select name="jabatan" id="jabatan" class="form-select" required>
                        <option value="" disabled selected>Pilih Jabatan</option>
                        <option value="kasir">Kasir</option>
                        <option value="staffGudang">Staff Gudang</option>
                        <option value="kebersihan">Kebersihan</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="jk" class="form-label">Jenis Kelamin <span>*</span></label>
                    <select name="jk" id="jk" class="form-select" required>
                        <option value="" disabled selected>Pilih Jenis Kelamin</option>
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="no_telp" class="form-label">No. Telepon <span>*</span></label>
                    <input type="text" class="form-control input" name="no_telp" id="no_telp"
                        placeholder="Masukan no. telepon" required>
                </div>
                <div class="mb-4">
                    <label for="alamat" class="form-label">Alamat <span>*</span></label>
                    <textarea class="form-control input" name="alamat" id="alamat" placeholder="Masukan alamat" required></textarea>
                </div>
                <div class="mb-4">
                    <label for="ttl" class="form-label">Tanggal Lahir <span>*</span></label>
                    <input type="date" class="form-control input" name="ttl" id="ttl" required>
                </div>
                <div class="mb-4">
                    <label for="status_karyawan" class="form-label">Status Karyawan <span>*</span></label>
                    <select name="status_karyawan" id="status_karyawan" class="form-select" required>
                        <option value="" disabled selected>Pilih Status Karyawan</option>
                        <option value="karyawan_tetap">Karyawan Tetap</option>
                        <option value="karyawan_magang">Karyawan Magang</option>
                        <option value="karyawan_kontrak">Karyawan Kontrak</option>
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
