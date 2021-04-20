@extends('layouts.app')

@section('content')
<div class="container pt-4">
    <div class="row">
        <div class="col-md-12">
            <div class="px-3 py-3">
                <h5 class="text-muted">
                    <div class="card bg-success">
                        <div class="card-body">
                        <form action="{{route('backend.user.cekbarang.store')}}" enctype="multipart/form-data" method="post">
                            <h5>Perhatian !!!</h5>
                            <h6>Masukan semua informasi permintaan dibnawah ini dengan lengkap dan benar</h6>
                        </div>
                    </div>
                    <br>
                    <h6>Data Pribadi</h6>
                </h5>
                <br>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="name" class="">Nama Lengkap</label>
                            <input type="text" name="nama_lengkap" class="form-control" placeholder>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="name" class="">Alamat</label>
                            <input type="text" name="alamat" class="form-control" placeholder>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="name" class="">E-mail</label>
                            <input type="text" name="email" class="form-control" placeholder>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="name" class="">Telp</label>
                            <input type="text" name="no_telp" class="form-control" placeholder>
                        </div>
                    </div>
                </div>
                <h6>Detail Permintaan</h6>
                <br>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="name" class="">Nama Barang</label>
                            <input type="text" name="nama_barang" class="form-control" placeholder>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="name" class="">Jumlah Stock</label>
                            <input type="text" name="jumlah_stock" class="form-control" placeholder>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="name" class="">Jumlah Permintaan</label>
                            <input type="text" name="jumlah_permintaan" class="form-control" placeholder>
                        </div>
                    </div>
                </div>
                <button class="btn btn-sm" type="submit">Kirim Permintaan</button>
                <button class="btn btn-sm">Cancel</button>
            </div>
        </div>
    </div>
</div>
@endsection