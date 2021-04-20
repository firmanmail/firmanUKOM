@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-11">
            <div class="card border-0 shadow">
                <div class="card-body">
                <form action="" enctype="multipart/form-data" method="post">
                    @csrf
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{session('success')}}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Nama Barang</label>
                                <input type="text" name="" id="" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Quantity</label>
                                <input type="text" name="" id="" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Tanggal Masuk</label>
                                <input type="date" name="" id="" class="form-control" placeholder="">
                            </div>
                        </div>
                    <div class="pt-2 mb-2">
                        <button type="submit" class="btn btn-danger">
                            Simpan
                        </button>
                        <a href="{{route('backend.admin.suplier.index')}}" class="btn btn-warning">
                          Batal
                        </a>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection