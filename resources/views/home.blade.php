@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

            <div class="jumbotron" style="background-image: url('img/009r3g5yidqx_lthwt8.jpg')">
                <div class="container">
                    <h3 class="text-center text-light">
                        Selamat Datang di aplikasi permintaan Barang UjiKompetensi Rekayasa Perangkat Lunak
                    </h3>
                    <br>
                    <br>
                        <h5 class="text-center text-light text-muted">Halo <strong>{{ Auth::user()->name }}</strong>, Anda login sebagai <strong>{{ auth()->user()->roles->first()->name }}</strong>.
                    </h5>
                </div>
            </div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
        </div>
    </div>
</div>
@endsection
