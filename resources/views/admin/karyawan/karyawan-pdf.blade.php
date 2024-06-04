<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Karyawan</title>
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
        <h2>Data Karyawan</h2>
    </center>
    {{-- Tabel Karyawan --}}
    <table border="1" class="table table-bordered">
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
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
