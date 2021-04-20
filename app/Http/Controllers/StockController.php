<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StockController extends Controller
{
    public function index()
    {
        return view('backend.admin.stock.index');
    }
    public function create()
    {
        return view('backend.admin.stock.create');
    }
}
