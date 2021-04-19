@extends('layouts.app')

@section('content')
<div class="container pt-4">
    <div class="row">
        <div class="col-md-12">
            <div class="px-3 py-3">
                <h5 class="text-muted">
                    <div class="card bg-success">
                        <div class="card-body">
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
                            <label for="" class="">Nama Lengkap</label>
                            <input type="text" class="form-control" placeholder>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="" class="">Alamat</label>
                            <input type="text" class="form-control" placeholder>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="" class="">E-mail</label>
                            <input type="text" class="form-control" placeholder>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="" class="">Telp</label>
                            <input type="text" class="form-control" placeholder>
                        </div>
                    </div>
                </div>
                <h6>Detail Permintaan</h6>
                <br>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="" class="">Nama Barang</label>
                            <input type="text" class="form-control" placeholder>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="" class="">Jumlah Stock</label>
                            <input type="text" class="form-control" placeholder>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="" class="">Jumlah Permintaan</label>
                            <input type="text" class="form-control" placeholder>
                        </div>
                    </div>
                </div>
                <button class="btn btn-sm">Kirim Permintaan</button>
                <button class="btn btn-sm">Cancel</button>
            </div>
        </div>
    </div>
</div>
@endsection