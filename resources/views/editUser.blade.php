@extends('layout.main')
@extends('partials.navbar')
@section('container')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10">
            <h3>Edit Data</h3>
            <div class="row mb-3">
                <div class="card mb-3">
                    <div class="container ">
                        <form action="/account" method="POST" class="form-horizontal">
                            @csrf
                            <div class="mb-3 row">
                                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text"
                                        class="form-control form-control-md @error('name')is-invalid @enderror"
                                        id="name" name="name" value="{{ $user->name }}">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="tgl" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-10">
                                    <input type="date"
                                        class="form-control form-control-md @error('tgl')is-invalid @enderror" id="tgl"
                                        name="tgl" value="{{ $user->tgl_lahir }}">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-md" id=" email" name="email"
                                        value="{{ $user->email }}">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Username</label>
                                <div class="col-sm-10">
                                    <input type="text"
                                        class="form-control form-control-md @error('username')is-invalid @enderror"
                                        id="username" name="username" value="{{ $user->username}}">
                                </div>
                            </div>
                            {{-- <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">New Password</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-lg" id="pass" name="pass"
                                        value="">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Confirm Password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                            </div> --}}
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-md" id="alamat" name="alamat"
                                        value="{{ $user->alamat }}">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Bio</label>
                                <div class="col-sm-10">
                                    <input type="textarea" class="form-control form-control-md " id="bio" name="bio"
                                        value="{{ $user->bio }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary mb-3 col-1" value="Simpan">
                                    <a href="/home" class="btn btn-success mb-3 col-1">Kembali</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('partials.footer')