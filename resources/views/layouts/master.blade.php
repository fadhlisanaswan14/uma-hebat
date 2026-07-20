<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Portfolio</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f0f2f5;
            color: #333;
            line-height: 1.6;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        nav {
            background: #2c3e50;
            padding: 15px 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        nav ul {
            list-style: none;
            display: flex;
            justify-content: center;
            gap: 30px;
            padding: 0 20px;
        }
        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            padding: 8px 16px;
            border-radius: 5px;
            transition: background 0.3s;
        }
        nav ul li a:hover {
            background: #34495e;
        }
        .card {
            background: white;
            border-radius: 10px;
            padding: 30px;
            margin: 30px 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .card h1 {
            color: #2c3e50;
            margin-bottom: 20px;
            border-bottom: 3px solid #3498db;
            padding-bottom: 10px;
        }
        .card p {
            font-size: 18px;
            margin: 10px 0;
        }
        .card ul {
            list-style: none;
            padding: 0;
        }
        .card ul li {
            background: #ecf0f1;
            margin: 10px 0;
            padding: 12px 20px;
            border-radius: 5px;
            font-size: 18px;
            border-left: 4px solid #3498db;
        }
        .footer {
            text-align: center;
            padding: 20px;
            color: #7f8c8d;
            margin-top: 30px;
        }
        .highlight {
            color: #3498db;
            font-weight: bold;
        }
        .badge {
            display: inline-block;
            background: #3498db;
            color: white;
            padding: 2px 12px;
            border-radius: 20px;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="/home">🏠 Home</a></li>
            <li><a href="/profil">👤 Profil</a></li>
            <li><a href="/pendidikan">🎓 Pendidikan</a></li>
            <li><a href="/keahlian">💻 Keahlian</a></li>
        </ul>
    </nav>

    <div class="container">
        <div class="card">
            @yield('content')
        </div>
        <div class="footer">
            &copy; 2024 - Portfolio Praktikum Web II
        </div>
    </div>
</body>
</html>