<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UtsController extends Controller
{
    public function index()
    {
        return view('uts.index');
    }

    public function web()
    {
        return view('uts.web');
    }

    public function database()
    {
        return view('uts.database');
    }
}
