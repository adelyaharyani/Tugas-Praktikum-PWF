<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($angka)
    {
        $tambah = 10; // ubah angka penambahan sesuai kebutuhan
        $hasil = (int)$angka + $tambah;

        // kirim ke view
        return view('products.index', compact('angka', 'tambah', 'hasil'));
    }
}
