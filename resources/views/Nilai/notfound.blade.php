<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Tidak Ditemukan</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            padding: 20px;
        }
        .container {
            background: white;
            border-radius: 12px;
            padding: 50px;
            text-align: center;
            max-width: 500px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        }
        .icon {
            font-size: 80px;
            margin-bottom: 20px;
        }
        h1 {
            color: #e74c3c;
            font-size: 28px;
            margin-bottom: 10px;
        }
        p {
            color: #7f8c8d;
            font-size: 18px;
            margin-bottom: 20px;
        }
        .btn {
            display: inline-block;
            padding: 10px 25px;
            background: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s;
        }
        .btn:hover {
            background: #2980b9;
        }
        .detail {
            background: #f8f9fa;
            padding: 10px;
            border-radius: 5px;
            margin: 20px 0;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="icon">🔍</div>
        <h1>Data Mahasiswa Tidak Ditemukan</h1>
        <p>Mahasiswa dengan ID <strong>{{ $id }}</strong> tidak terdaftar di sistem.</p>
        <div class="detail">
            💡 Pastikan ID yang dimasukkan benar.
        </div>
        <a href="{{ url('/') }}" class="btn">⬅ Kembali ke Halaman Utama</a>
    </div>
</body>
</html>