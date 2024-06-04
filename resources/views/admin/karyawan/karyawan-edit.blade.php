@extends('admin.master')

@section('title', 'Edit Data Karyawan')

@section('content')
    <div class="content-form">
        <h4 class="fw-semibold mb-4">Form Edit Data Karyawan</h4>
        {{-- Form --}}
        <div class="form-add p-4 bg-white rounded-4">
            <form action="{{ route('karyawan.update', $karyawan->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="nama_karyawan" class="form-label">Nama Karyawan <span>*</span></label>
                    <input type="text" class="form-control input" name="nama_karyawan" id="nama_karyawan"
                        value="{{ $karyawan->nama_karyawan }}" placeholder="Masukan nama karyawan" required>
                </div>
                <div class="mb-4">
                    <label for="jabatan" class="form-label">Jabatan <span>*</span></label>
                    <select name="jabatan" id="jabatan" class="form-select" required>
                        <option value="" disabled>Pilih Jabatan</option>
                        <option value="kasir" {{ $karyawan->jabatan == 'kasir' ? 'selected' : '' }}>Kasir</option>
                        <option value="staffGudang" {{ $karyawan->jabatan == 'staffGudang' ? 'selected' : '' }}>Staff Gudang
                        </option>
                        <option value="kebersihan" {{ $karyawan->jabatan == 'kebersihan' ? 'selected' : '' }}>Kebersihan
                        </option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="jk" class="form-label">Jenis Kelamin <span>*</span></label>
                    <select name="jk" id="jk" class="form-select" required>
                        <option value="" disabled>Pilih Jenis Kelamin</option>
                        <option value="L" {{ $karyawan->jk == 'L' ? 'selected' : '' }}>Laki-laki</option>
                        <option value="P" {{ $karyawan->jk == 'P' ? 'selected' : '' }}>Perempuan</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="no_telp" class="form-label">No. Telepon <span>*</span></label>
                    <input type="text" class="form-control input" name="no_telp" id="no_telp"
                        value="{{ $karyawan->no_telp }}" placeholder="Masukan no. telepon" required>
                </div>
                <div class="mb-4">
                    <label for="alamat" class="form-label">Alamat <span>*</span></label>
                    <textarea class="form-control input" name="alamat" id="alamat" placeholder="Masukan alamat" required>{{ $karyawan->alamat }}</textarea>
                </div>
                <div class="mb-4">
                    <label for="ttl" class="form-label">Tanggal Lahir <span>*</span></label>
                    <input type="date" class="form-control input" name="ttl" id="ttl"
                        value="{{ $karyawan->ttl }}" required>
                </div>
                <div class="mb-4">
                    <label for="status_karyawan" class="form-label">Status Karyawan <span>*</span></label>
                    <select name="status_karyawan" id="status_karyawan" class="form-select" required>
                        <option value="" disabled>Pilih Status Karyawan</option>
                        <option value="karyawan_tetap"
                            {{ $karyawan->status_karyawan == 'karyawan_tetap' ? 'selected' : '' }}>Karyawan Tetap</option>
                        <option value="karyawan_magang"
                            {{ $karyawan->status_karyawan == 'karyawan_magang' ? 'selected' : '' }}>Karyawan Magang
                        </option>
                        <option value="karyawan_kontrak"
                            {{ $karyawan->status_karyawan == 'karyawan_kontrak' ? 'selected' : '' }}>Karyawan Kontrak
                        </option>
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
