@extends('layout.main')
@extends('partials.navbar')
@section('container')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10">
            <h3>Edit Data</h3>
            <div class="row mb-3">
                <div class="card mb-3">
                    <div class="container">
                        @csrf
                        <form class="form-horizontal" method="POST" action="/account" enctype="multipart/form-data">
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control  " id="nama">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="tglLahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control  " id="tgl">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control  " id="staticEmail"
                                        placeholder="email@example.com">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Username</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control  " id="username">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control  " id="inputPassword">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control  " id="alamat">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Bio</label>
                                <div class="col-sm-10">
                                    <textarea type="text" class="form-control  " id="nama"></textarea>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Foto</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" id="inputGroupFile02">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <a href="" class="btn btn-primary">Simpan</a>
                                    <a href="/home" class="btn btn-success">Kembali</a>
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