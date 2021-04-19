@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="px-3 py-3">
                <h5 class="text-muted">
                    Daftar Barang
                </h5>
                <br>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Kode Barang</th>
                            <th>Nama Suplier</th>
                            <th>Nama Barang</th>
                            <th>Phone</th>
                            <th>Stock</th>
                            <th>option</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>BRG.2021.12</td>
                            <td>PT.Yamaha Indonesia</td>
                            <td>Block Mesin Yamaha R-25</td>
                            <td>+62 ***********</td>
                            <td>100</td>
                            <th>
                            <a href="{{route('backend.user.cekbarang.create')}}" class="btn btn-outline-dark btn-sm text">
                                Buat Request
                            </a>
                            </th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection