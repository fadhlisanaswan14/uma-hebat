@extends('layouts.master')

@section('title', 'Pendidikan')

@section('content')
    <h1>🎓 Riwayat Pendidikan</h1>
    <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
        <tr style="border-bottom: 1px solid #ddd;">
            <td style="padding: 15px; font-weight: bold; width: 150px;">Kampus</td>
            <td style="padding: 15px;">: <span class="highlight">{{ $kampus }}</span></td>
        </tr>
        <tr style="border-bottom: 1px solid #ddd;">
            <td style="padding: 15px; font-weight: bold;">Program Studi</td>
            <td style="padding: 15px;">: <span class="highlight">{{ $prodi }}</span></td>
        </tr>
        <tr>
            <td style="padding: 15px; font-weight: bold;">Tahun Masuk</td>
            <td style="padding: 15px;">: 2023</td>
        </tr>
    </table>
    <div style="margin-top: 30px; padding: 15px; background: #e8f4fd; border-radius: 8px;">
        <p style="color: #2c3e50;">
            <strong>📌 Informasi:</strong> Data ini dikirim dari controller melalui variabel <code>$kampus</code> dan <code>$prodi</code>.
        </p>
    </div>
@endsection