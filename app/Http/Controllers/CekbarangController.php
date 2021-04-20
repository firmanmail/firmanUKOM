<?php

namespace App\Http\Controllers;

use App\Cekbarang;
use Illuminate\Http\Request;

class CekbarangController extends Controller
{
    public function index()
    {
        $requests = Cekbarang::all();
        return view('backend.user.cekbarang.index');
    }
    public function create()
    {
        return view('backend.user.cekbarang.create');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama_lengkap'      => 'required',
            'alamat'            => 'required',
            'email'             => 'required',
            'no_telp'           => 'required',
            'nama_barang'       => 'required',
            'jumlah_stock'      => 'required',
            'jumlah_permintaan' => 'required'
        ]);

        $requests = Cekbarang::create([
            'nama_lengkap'      => $required->nama_lengkap,
            'alamat'            => $required->alamat,
            'email'             => $required->email,
            'no_telp'           => $required->no_telp,
            'nama_barang'       => $required->nama_barang,
            'jumlah_stock'      => $required->jumlah_stock,
            'jumlah_permintaan' => $required->jumlah_permintaan
        ]);

        $requests->save();
        return redirect()->back();
    }
}
