@extends('layouts.app')

@section('content')
@if (Route::has('login'))
@auth
@role ('Admin')
<div class="d-flex hd-cheatsheet container-fluid bg-body">
    <div class="col-md-2" style="margin-top: -28px;">
        <section id="content">
            <h6 class="sticky-xl-top fw-bold pt-3 pt-xl-5 pb-2 pb-xl-3 text-center" style="margin-left: 200px;">Admin</h6>

            <article>
                <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2 text-center">
                    <img src="{{ asset('img/Mengintip-Gaya-Kepemimpinan-Steve-Jobs-yang-Unik-dan-Inspiratif.jpg') }}" class="rounded-circle" width="80px" height="80" alt="">
                    <p class="font-weight-bold text-center pt-2">Steve Jobs</p>
                </div>
                    <p class="text-muted text-center" style="margin-top: -15px;">stevejobs@gmail.com
                        <a href="{{Route('backend.admin.member.invite.index')}}" class="btn btn-primary btn-sm btn-block">Add Member</a>
                    </p>
                        <div class="d-flex justify-content-center" style="margin-top: -20px;">
                        <svg height="48px" viewBox="0 0 48 48" width="25px" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h48v48h-48z" width="34px" fill="none"/><path d="M13.25 21.59c2.88 5.66 7.51 10.29 13.18 13.17l4.4-4.41c.55-.55 1.34-.71 2.03-.49 2.24.74 4.65 1.14 7.14 1.14 1.11 0 2 .89 2 2v7c0 1.11-.89 2-2 2-18.78 0-34-15.22-34-34 0-1.11.9-2 2-2h7c1.11 0 2 .89 2 2 0 2.49.4 4.9 1.14 7.14.22.69.06 1.48-.49 2.03l-4.4 4.42z"/></svg>
                        <p class="font-weight-bold text-center px-4" style="margin-top: 15px;">+62 XXXXXXX</p>
                    </div>
                    <div class="d-flex justify-content-center" style="margin-top: -15px;">
                        <svg style="enable-background:new 0 0 24 24;" version="1.1" width="25px" height="48px" viewBox="0 0 24 24" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="info"/><g id="icons"><path d="M12,0C7,0,3,4,3,9c0,6.2,3.4,11.7,8.5,14.9c0.3,0.2,0.7,0.2,1.1,0C17.6,20.6,21,15.2,21,9C21,4,17,0,12,0z M12,13   c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,11.2,14.2,13,12,13z" id="pin"/></g></svg>
                        <p class="font-weight-bold text-center px-4" style="margin-top: 15px;">Jakarta no 29</p>
                    </div>
            </article>
        </section>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex">
                    <div class="col-md-3">
                        <div class="card border-0 shadow">
                            <div class="card-body d-flex">
                                <h5 class="text-muted">Stock Barang</h5>
                                <h3 class="ml-auto">210</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card border-0 shadow">
                            <div class="card-body d-flex">
                                <h5 class="text-muted">Request</h5>
                                <h3 class="ml-auto">100</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card border-0 shadow">
                            <div class="card-body d-flex">
                                <h5 class="text-muted">Barang Keluar</h5>
                                <h3 class="ml-auto">100</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card border-0 shadow">
                            <div class="card-body d-flex">
                                <h5 class="text-muted">Barang Masuk</h5>
                                <h3 class="ml-auto">100</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <div class="col-md-12">
            <div class="px-3 py-3">
                <h5 class="text-muted">
                    Daftar Barang
                </h5>
                <br>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Kode Suplier</th>
                            <th>Nama Suplier</th>
                            <th>E-mail</th>
                            <th>Phone</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>SUP.2021.13</td>
                            <td>PT.Yamaha Indonesia</td>
                            <td>yamahaindonesia@gmail.com</td>
                            <td>+62 ***********</td>
                            <th>
                            <h5><span class="badge bg-secondary">Active</span></h5>
                            </th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
            </div>
        </div>
    </div>
</div>
@endrole
@role ('admingudang')
<div class="d-flex hd-cheatsheet container-fluid bg-body">
    <div class="col-md-2" style="margin-top: -28px;">
        <section id="content">
            <h6 class="sticky-xl-top fw-bold pt-3 pt-xl-5 pb-2 pb-xl-3 text-center" style="margin-left: 200px;">Admin</h6>

            <article>
                <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2 text-center">
                    <img src="{{ asset('img/Mengintip-Gaya-Kepemimpinan-Steve-Jobs-yang-Unik-dan-Inspiratif.jpg') }}" class="rounded-circle" width="80px" height="80" alt="">
                    <p class="font-weight-bold text-center pt-2">Steve Jobs</p>
                </div>
                    <p class="text-muted text-center" style="margin-top: -15px;">stevejobs@gmail.com
                        <a href="{{Route('backend.admin.member.invite.index')}}" class="btn btn-primary btn-sm btn-block">Add Member</a>
                    </p>
                        <div class="d-flex justify-content-center" style="margin-top: -20px;">
                        <svg height="48px" viewBox="0 0 48 48" width="25px" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h48v48h-48z" width="34px" fill="none"/><path d="M13.25 21.59c2.88 5.66 7.51 10.29 13.18 13.17l4.4-4.41c.55-.55 1.34-.71 2.03-.49 2.24.74 4.65 1.14 7.14 1.14 1.11 0 2 .89 2 2v7c0 1.11-.89 2-2 2-18.78 0-34-15.22-34-34 0-1.11.9-2 2-2h7c1.11 0 2 .89 2 2 0 2.49.4 4.9 1.14 7.14.22.69.06 1.48-.49 2.03l-4.4 4.42z"/></svg>
                        <p class="font-weight-bold text-center px-4" style="margin-top: 15px;">+62 XXXXXXX</p>
                    </div>
                    <div class="d-flex justify-content-center" style="margin-top: -15px;">
                        <svg style="enable-background:new 0 0 24 24;" version="1.1" width="25px" height="48px" viewBox="0 0 24 24" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="info"/><g id="icons"><path d="M12,0C7,0,3,4,3,9c0,6.2,3.4,11.7,8.5,14.9c0.3,0.2,0.7,0.2,1.1,0C17.6,20.6,21,15.2,21,9C21,4,17,0,12,0z M12,13   c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,11.2,14.2,13,12,13z" id="pin"/></g></svg>
                        <p class="font-weight-bold text-center px-4" style="margin-top: 15px;">Jakarta no 29</p>
                    </div>
            </article>
        </section>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="input-group-lg">
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                </div>
                <br>
                <br>
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
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>BRQ.2021.13</td>
                            <td>PT.Yamaha Indonesia</td>
                            <td>Block Mesin R-25</td>
                            <td>+62 ***********</td>
                            <td>100</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
            </div>
        </div>
    </div>
</div>
@endrole
@endauth
@endif
@endsection