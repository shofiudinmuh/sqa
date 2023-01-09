@extends('layout.main')
@extends('partials.navbar')
@section('container')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10">
            <h3>Welcome back, {{ auth()->user()->name }} </h3>
            <figure class="figure">
                <img src="..." class="figure-img img-fluid rounded" alt="...">
            </figure>
            <div class="row">
                <div class="card mb-3">
                    <div class="container mb-3">
                        <form class="form-horizontal" method="POST" action="" enctype="multipart/form-data">
                            {{-- @foreach ($user as $data) --}}
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext" id="nama"
                                        value=": {{ auth()->user()->name }}">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                        value=": {{ auth()->user()->email}}">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Username</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext" id="username"
                                        value=": {{ auth()->user()->username}}">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext" id="inputPassword"
                                        value=": {{ auth()->user()->password}}">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext" id="alamat"
                                        value=": {{ auth()->user()->alamat}}">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Bio</label>
                                <div class="col-sm-10">
                                    <textarea type="text" readonly class="form-control-plaintext" id="nama"
                                        value=": {{ auth()->user()->bio}}"></textarea>
                                </div>
                            </div>
                        </form>
                        {{-- @endforeach --}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <a href="/account" class="btn btn-primary">Ubah Akun</a>
                    <a href="" class="btn btn-danger">Hapus Akun</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('partials.footer')