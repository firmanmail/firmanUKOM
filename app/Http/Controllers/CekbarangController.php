<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CekbarangController extends Controller
{
    public function index()
    {
        return view('backend.user.cekbarang.index');
    }
    public function create()
    {
        return view('backend.user.cekbarang.create');
    }
}
