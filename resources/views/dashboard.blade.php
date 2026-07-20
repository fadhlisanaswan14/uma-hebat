<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Protected Page</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        .container {
            background: white;
            border-radius: 16px;
            padding: 40px;
            max-width: 600px;
            width: 100%;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
        }
        .header {
            text-align: center;
            padding-bottom: 20px;
            border-bottom: 3px solid #667eea;
            margin-bottom: 30px;
        }
        .header .icon {
            font-size: 60px;
            margin-bottom: 10px;
        }
        .header h1 {
            color: #2c3e50;
            font-size: 28px;
        }
        .header p {
            color: #7f8c8d;
            font-size: 14px;
        }
        .info-card {
            background: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
        }
        .info-card .label {
            color: #7f8c8d;
            font-size: 14px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .info-card .value {
            font-size: 22px;
            font-weight: bold;
            color: #2c3e50;
            margin-top: 5px;
        }
        .info-card .value .badge {
            display: inline-block;
            padding: 4px 16px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 600;
        }
        .badge-admin {
            background: #d5f5e3;
            color: #27ae60;
        }
        .badge-user {
            background: #e8f4fd;
            color: #3498db;
        }
        .badge-guest {
            background: #fef9e7;
            color: #f39c12;
        }
        .success-box {
            background: #d5f5e3;
            border-left: 4px solid #27ae60;
            padding: 15px 20px;
            border-radius: 5px;
            margin: 20px 0;
        }
        .success-box p {
            color: #27ae60;
            font-weight: 500;
        }
        .btn {
            display: inline-block;
            padding: 10px 25px;
            background: #667eea;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s;
            border: none;
            cursor: pointer;
            font-size: 14px;
        }
        .btn:hover {
            background: #5a67d8;
        }
        .btn-danger {
            background: #e74c3c;
        }
        .btn-danger:hover {
            background: #c0392b;
        }
        .btn-group {
            display: flex;
            gap: 10px;
            margin-top: 20px;
            justify-content: center;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #eee;
            color: #95a5a6;
            font-size: 14px;
        }
        .age-indicator {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-top: 5px;
        }
        .age-indicator .status {
            padding: 3px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: bold;
        }
        .status-verified {
            background: #d5f5e3;
            color: #27ae60;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="icon">🔐</div>
            <h1>Dashboard Terproteksi</h1>
            <p>Halaman ini hanya bisa diakses oleh user usia ≥ 18 tahun</p>
        </div>

        <!-- Informasi User -->
        <div class="info-card">
            <div class="label">👤 Nama Pengguna</div>
            <div class="value">{{ Auth::user()->name }}</div>
        </div>

        <div class="info-card">
            <div class="label">🎭 Role / Peran</div>
            <div class="value">
                <span class="badge 
                    @if(Auth::user()->role == 'admin') badge-admin 
                    @elseif(Auth::user()->role == 'user') badge-user 
                    @else badge-guest @endif">
                    {{ ucfirst(Auth::user()->role) }}
                </span>
            </div>
        </div>

        <div class="info-card">
            <div class="label">📅 Usia</div>
            <div class="value">
                {{ Auth::user()->age }} tahun
                <span class="status status-verified">✅ Verified (≥ 18)</span>
            </div>
        </div>

        <div class="info-card">
            <div class="label">📧 Email</div>
            <div class="value">{{ Auth::user()->email }}</div>
        </div>

        <!-- Pesan Sukses -->
        <div class="success-box">
            <p>✅ Selamat! Anda telah berhasil mengakses halaman ini karena usia Anda memenuhi syarat (≥ 18 tahun).</p>
        </div>

        <!-- Tombol -->
        <div class="btn-group">
            <a href="{{ url('/') }}" class="btn">🏠 Kembali ke Home</a>
            <a href="{{ route('logout') }}" class="btn btn-danger" 
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                🚪 Logout
            </a>
        </div>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>

        <div class="footer">
            &copy; {{ date('Y') }} - Praktikum Web II | Middleware Custom
        </div>
    </div>
</body>
</html>