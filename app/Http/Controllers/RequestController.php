<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function index()
    {
        return view('backend.admin.request.index');
    }
    public function accept()
    {
        return view('backend.admin.request.accept');
    }
    public function reject()
    {
        return view('backend.admin.request.reject');
    }
}
