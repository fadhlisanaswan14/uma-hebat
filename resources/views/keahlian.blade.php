@extends('layouts.master')

@section('title', 'Keahlian')

@section('content')
    <h1>💻 Keahlian Saya</h1>
    <p style="color: #555; margin-bottom: 20px;">Berikut adalah beberapa keahlian yang saya kuasai:</p>
    <ul>
        @foreach($skills as $skill)
            <li>
                <span style="font-size: 20px; margin-right: 10px;">✅</span>
                {{ $skill }}
                <span class="badge" style="float: right;">Level: Menengah</span>
            </li>
        @endforeach
    </ul>
    <div style="margin-top: 30px; padding: 15px; background: #e8f4fd; border-radius: 8px;">
        <p style="color: #2c3e50;">
            <strong>📌 Informasi:</strong> Data ini dikirim dari controller melalui variabel array <code>$skills</code>.
        </p>
    </div>
@endsection