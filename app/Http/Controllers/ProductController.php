<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($angka)
{
    if ($angka % 2 == 0) {
        $type = 'success';
        $message = 'Nilai ini adalah genap';
    } else {
        $type = 'warning';
        $message = 'Nilai ini adalah ganjil';
    }

    return view('products.index', [
        'angka' => $angka,
        'type' => $type,
        'message' => $message,
    ]);
}
}