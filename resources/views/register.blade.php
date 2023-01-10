@extends('layout.main')

@section('container')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card o-hidden border-o shadow-lg my-5">
                <div class="card-body p-5">
                    <div class="row">
                        <div class="col-lg-12 align-self-center">
                            <h3 class="text-center">Register</h3>
                            <form action="/register" method="POST">
                                @csrf
                                <div class="form-group mb-3">
                                    <input type="text"
                                        class="form-control form-control-lg @error('name')is-invalid @enderror"
                                        id="name" name="name" placeholder="Nama" value="{{ old('name') }}">
                                    @error('name')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text"
                                        class="form-control form-control-lg @error('email')is-invalid @enderror"
                                        id="email" name="email" placeholder="Email" value="{{ old('email') }}">
                                    @error('email')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text"
                                        class="form-control form-control-lg @error('username')is-invalid @enderror"
                                        id="username" name="username" placeholder="Username"
                                        value="{{ old('username') }}">
                                    @error('username')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text"
                                        class="form-control form-control-lg @error('password')is-invalid @enderror"
                                        id="pass" name="pas" placeholder="Password" value="{{ old('password') }}">
                                </div>
                                <div class="form-group mb-3">
                                    <input type="password"
                                        class="form-control form-control-lg @error('password')is-invalid @enderror"
                                        id="password" name="password" placeholder="Confirm Password"
                                        value="{{ old('password') }}">
                                    @error('password')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="d-grid gap-2 col-4 mx-auto">
                                    <input type="submit" class="btn btn-primary mb-3 col-12" value="Register">
                                </div>
                            </form>
                            <div class="d-grid gap-2 col-4 mx-auto">
                                <small>Have an account? <a href="/login">Sign In</a></small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection