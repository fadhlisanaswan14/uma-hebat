<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Nilai Mahasiswa</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f0f2f5;
            padding: 40px 20px;
        }
        .container {
            max-width: 900px;
            margin: 0 auto;
            background: white;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        }
        .header {
            text-align: center;
            padding-bottom: 20px;
            border-bottom: 3px solid #3498db;
            margin-bottom: 30px;
        }
        .header h1 {
            color: #2c3e50;
            font-size: 28px;
        }
        .header p {
            color: #7f8c8d;
            font-size: 14px;
            margin-top: 5px;
        }
        .info-mahasiswa {
            background: #e8f4fd;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 30px;
        }
        .info-mahasiswa h2 {
            color: #2c3e50;
            font-size: 22px;
            margin-bottom: 15px;
        }
        .info-mahasiswa table {
            width: 100%;
            border-collapse: collapse;
        }
        .info-mahasiswa table td {
            padding: 8px 10px;
            font-size: 16px;
        }
        .info-mahasiswa table td:first-child {
            font-weight: bold;
            width: 120px;
            color: #555;
        }
        .info-mahasiswa table td:last-child {
            color: #2c3e50;
        }
        .table-nilai {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .table-nilai thead {
            background: #2c3e50;
            color: white;
        }
        .table-nilai th {
            padding: 12px 15px;
            text-align: left;
        }
        .table-nilai td {
            padding: 12px 15px;
            border-bottom: 1px solid #ddd;
        }
        .table-nilai tbody tr:hover {
            background: #f5f7fa;
        }
        .table-nilai .nilai {
            font-weight: bold;
            text-align: center;
        }
        .nilai-a {
            color: #27ae60;
        }
        .nilai-b {
            color: #3498db;
        }
        .nilai-c {
            color: #f39c12;
        }
        .nilai-d {
            color: #e74c3c;
        }
        .btn-back {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s;
        }
        .btn-back:hover {
            background: #2980b9;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #ddd;
            color: #95a5a6;
            font-size: 14px;
        }
        .empty {
            text-align: center;
            padding: 30px;
            color: #7f8c8d;
        }
        .empty .icon {
            font-size: 48px;
            margin-bottom: 10px;
        }
        .badge {
            display: inline-block;
            padding: 3px 12px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: bold;
        }
        .badge-lulus {
            background: #d5f5e3;
            color: #27ae60;
        }
        .badge-tidak-lulus {
            background: #fadbd8;
            color: #e74c3c;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <h1>📊 Data Nilai Mahasiswa</h1>
            <p>Sistem Informasi Akademik</p>
        </div>

        <!-- Informasi Mahasiswa -->
        <div class="info-mahasiswa">
            <h2>👤 Identitas Mahasiswa</h2>
            <table>
                <tr>
                    <td>Nama</td>
                    <td>: <strong>{{ $mahasiswa->nama }}</strong></td>
                </tr>
                <tr>
                    <td>NPM</td>
                    <td>: <strong>{{ $mahasiswa->npm ?? '-' }}</strong></td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>: <strong>{{ $mahasiswa->jurusan ?? '-' }}</strong></td>
                </tr>
                <tr>
                    <td>Total Matakuliah</td>
                    <td>: <strong>{{ $mahasiswa->nilais->count() }}</strong> matakuliah</td>
                </tr>
            </table>
        </div>

        <!-- Tabel Nilai -->
        <h3 style="color: #2c3e50; margin-bottom: 15px;">📋 Daftar Nilai</h3>

        @if($mahasiswa->nilais->count() > 0)
            <table class="table-nilai">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Matakuliah</th>
                        <th>Kode</th>
                        <th>SKS</th>
                        <th style="text-align: center;">Nilai</th>
                        <th style="text-align: center;">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($mahasiswa->nilais as $index => $nilai)
                        @php
                            $matakuliah = $nilai->matakuliah;
                            $nilaiHuruf = $nilai->nilai;
                            $status = $nilaiHuruf >= 60 ? 'Lulus' : 'Tidak Lulus';
                            $badgeClass = $nilaiHuruf >= 60 ? 'badge-lulus' : 'badge-tidak-lulus';
                        @endphp
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td><strong>{{ $matakuliah->nama ?? 'Matakuliah tidak ditemukan' }}</strong></td>
                            <td>{{ $matakuliah->kode ?? '-' }}</td>
                            <td>{{ $matakuliah->sks ?? '-' }}</td>
                            <td class="nilai">
                                <span style="font-size: 18px; font-weight: bold; color: 
                                    {{ $nilaiHuruf >= 80 ? '#27ae60' : ($nilaiHuruf >= 70 ? '#3498db' : ($nilaiHuruf >= 60 ? '#f39c12' : '#e74c3c')) }}">
                                    {{ $nilaiHuruf }}
                                </span>
                            </td>
                            <td style="text-align: center;">
                                <span class="badge {{ $badgeClass }}">
                                    {{ $status }}
                                </span>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr style="background: #f8f9fa; font-weight: bold;">
                        <td colspan="6" style="text-align: right; padding: 15px;">
                            Rata-rata Nilai: 
                            <span style="color: #3498db; font-size: 18px;">
                                {{ number_format($mahasiswa->nilais->avg('nilai'), 2) }}
                            </span>
                        </td>
                    </tr>
                </tfoot>
            </table>
        @else
            <div class="empty">
                <div class="icon">📭</div>
                <p>Belum ada data nilai untuk mahasiswa ini.</p>
            </div>
        @endif

        <!-- Tombol Kembali -->
        <a href="{{ url('/') }}" class="btn-back">⬅ Kembali ke Halaman Utama</a>

        <!-- Footer -->
        <div class="footer">
            &copy; {{ date('Y') }} - Sistem Informasi Akademik | Praktikum Web II
        </div>
    </div>
</body>
</html>