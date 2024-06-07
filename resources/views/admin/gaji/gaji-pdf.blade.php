<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Gaji</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        table th,
        table td {
            padding: 10px;
            text-align: left;
        }

        table th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <center>
        <h2>Data Gaji</h2>
    </center>
    {{-- Tabel Gaji --}}
    <table border="1" class="table table-bordered">
        <thead class="table-secondary">
            <tr>
                <th>No</th>
                <th>Nama Karyawan</th>
                <th>Jabatan</th>
                <th>Tanggal Pembayaran</th>
                <th>Gaji Pokok</th>
                <th>Status Pembayaran</th>
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
                    <td>Rp {{ number_format($g->gaji_pokok, 0, ',', '.') }}</td>
                    <td>{{ $g->status_pembayaran == 'Proses' ? 'Proses' : 'Sukses' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
