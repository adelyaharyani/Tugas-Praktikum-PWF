<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Sistem Toko Mahasiswa') }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            text-align: center;
            width: 450px;
        }
        h1 {
            color: #d9534f;
        }
        p {
            color: #555;
            margin-bottom: 20px;
        }
        a {
            display: inline-block;
            margin-top: 15px;
            text-decoration: none;
            padding: 10px 20px;
            background: #d9534f;
            color: white;
            border-radius: 5px;
        }
        a:hover {
            background: #c9302c;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Sistem Toko Mahasiswa</h1>
        <p>Selamat datang di aplikasi Sistem Toko Mahasiswa.</p>
        <a href="{{ url('/login') }}">Login</a>
        <a href="{{ url('/register') }}">Register</a>
    </div>
</body>
</html>
