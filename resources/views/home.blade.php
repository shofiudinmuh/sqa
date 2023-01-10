@extends('layout.main')
@extends('partials.navbar')
@section('container')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10">
            <h3>Welcome back, {{ auth()->user()->name }} </h3>
            <figure class="figure">
                {{-- <img src="..." class="figure-img img-fluid rounded" alt="..."> --}}
            </figure>
            <div class="row">
                <div class="card mb-3">
                    <div class="card-header">
                        <h4>Data User </h4>
                    </div>
                    @if (session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session()->get('success') }}
                    </div>
                    @endif
                    <div class="container mb-3">
                        <form class="form-horizontal" method="POST" action="">
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext" id="nama"
                                        value=": {{ $user->name }}">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext" id="alamat"
                                        value=": {{ $user->tgl_lahir}}">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                        value=": {{ $user->email}}">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Username</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext" id="username"
                                        value=": {{ $user->username}}">
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext" id="alamat"
                                        value=": {{ $user->alamat}}">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Bio</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext" id="nama"
                                        value=": {{ $user->bio}}"></input>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <form action="{{ route('delete') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="form-group">
                        <div class="col"></div>
                        <a href="/account" class="btn btn-primary">Ubah Akun</a>
                        <input type="submit" href="" class="btn btn-danger ms-auto" value="Hapus Akun"></input>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@extends('partials.footer')