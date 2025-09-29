<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi UTS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <style>
        body {
            background-color: #f8f9fa;
        }
        h2 {
            margin-bottom: 20px;
            color: #333;
        }
        nav.navbar {
            margin-bottom: 20px;
        }
        footer {
            position: relative;
            bottom: 0;
            width: 100%;
        }
        .content-wrapper {
            min-height: 70vh; 
        }
    </style>
</head>
<body>
    {{-- Header --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ url('/') }}">UTS</a>
            <div>
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('uts.index') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('uts.web') }}">UTS Web</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('uts.database') }}">UTS Database</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- Body --}}
    <div class="container content-wrapper">
        @yield('content')
    </div>

    {{-- Footer --}}
    <footer class="bg-dark text-white text-center py-3 mt-4">
        <p>© {{ date('Y') }} Aplikasi UTS </p>
    </footer>
</body>
</html>
