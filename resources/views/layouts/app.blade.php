<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        header, footer { background: #f4f4f4; padding: 10px; text-align: center; }
        nav a { margin: 0 10px; }
    </style>
</head>
<body>
    <header>
        <h1>Praktikum UTS</h1>
        <nav>
            <a href="{{ route('uts.web') }}">Menu UTS Pemrograman Web</a> |
            <a href="{{ route('uts.database') }}">Menu UTS Database</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Sistem Laravel</p>
    </footer>
</body>
</html>
