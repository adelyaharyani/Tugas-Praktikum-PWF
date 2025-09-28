<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Produk</title>
    <style>
        .alert {
            padding: 10px 15px;
            border-radius: 5px;
            margin-bottom: 15px;
            font-weight: bold;
        }
        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
        .alert-warning {
            background-color: #fff3cd;
            color: #856404;
            border: 1px solid #ffeeba;
        }
    </style>
</head>
<body>
    <h1>Halaman Produk</h1>

    {{-- tampilkan nilai parameter --}}
    <p>Parameter yang dikirim: {{ $angka }}</p>

    {{-- panggil komponen alert --}}
    <x-alert type="{{ $type }}">
        {{ $message }}
    </x-alert>
</body>
</html>
