<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UtsController extends Controller
{
    public function index()
    {
        return view('uts.index');
    }

    public function utsWeb()
    {
        return view('uts.web');
    }

    public function utsDatabase()
    {
        return view('uts.database');
    }
}
