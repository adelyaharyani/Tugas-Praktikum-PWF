<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Aplikasi UTS')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        body { background-color: #f8f9fa; }
        h2 { margin-bottom: 20px; color: #333; }
        .content-wrapper { min-height: 70vh; }
    </style>
</head>
<body>
    {{-- Header --}}
    @include('layouts.header')

    {{-- Body --}}
    <div class="container content-wrapper">
        @yield('content')
    </div>

    {{-- Footer --}}
    @include('layouts.footer')
</body>
</html>
