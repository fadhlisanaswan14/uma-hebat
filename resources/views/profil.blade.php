@extends('layouts.master')

@section('title', 'Profil')

@section('content')
    <h1>👤 Profil Saya</h1>
    <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
        <tr style="border-bottom: 1px solid #ddd;">
            <td style="padding: 15px; font-weight: bold; width: 150px;">Nama</td>
            <td style="padding: 15px;">: <span class="highlight">{{ $nama }}</span></td>
        </tr>
        <tr style="border-bottom: 1px solid #ddd;">
            <td style="padding: 15px; font-weight: bold;">NPM</td>
            <td style="padding: 15px;">: <span class="highlight">{{ $npm }}</span></td>
        </tr>
        <tr>
            <td style="padding: 15px; font-weight: bold;">Program Studi</td>
            <td style="padding: 15px;">: Teknik Informatika</td>
        </tr>
    </table>
    <div style="margin-top: 30px; padding: 15px; background: #e8f4fd; border-radius: 8px;">
        <p style="color: #2c3e50;">
            <strong>📌 Informasi:</strong> Data ini dikirim dari controller melalui variabel <code>$nama</code> dan <code>$npm</code>.
        </p>
    </div>
@endsection