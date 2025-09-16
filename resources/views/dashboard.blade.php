<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - {{ config('app.name') }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            padding: 30px;
        }
        .card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            max-width: 600px;
            margin: auto;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        }
        h1 {
            margin-bottom: 10px;
        }
        .logout-btn {
            background: #d9534f;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 6px;
            cursor: pointer;
            margin-top: 15px;
        }
        .logout-btn:hover {
            background: #c9302c;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>Halo, {{ Auth::user()->name }}</h1>
        <p>Selamat datang di <b>{{ config('app.name') }}</b></p>
        <p>Role Anda adalah: <b>{{ Auth::user()->role ?? 'users' }}</b></p>

        <!-- Tombol Logout -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="logout-btn">Logout</button>
        </form>
    </div>
</body>
</html>
