@extends('layout.main')

@section('container')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card o-hidden border-o shadow-lg my-5">
                <div class="card-body p-5">
                    <div class="row">

                        @if (session()->has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session()->get('success') }}
                        </div>
                        @endif

                        @if (session()->has('loginError'))
                        <div class="alert alert-danger" role="alert">
                            {{ session()->get('loginError') }}
                        </div>

                        @endif
                        <div class="col-lg-12 align-self-center">
                            <h3 class="text-center">Login</h3>
                            <form action="/login" method="POST">
                                @csrf
                                <div class="form-group mb-3">
                                    <input type="text"
                                        class="form-control form-control-lg @error('username')is-invalid @enderror"
                                        id="username" name="username" placeholder="Username" autofocus>
                                </div>
                                @error('username')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                                <div class="form-group mb-3">
                                    <input type="password"
                                        class="form-control form-control-lg @error('password')is-invalid @enderror"
                                        id="password" name="password" placeholder="Password">
                                </div>
                                @error('password')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <input type="submit" class="btn btn-primary mb-3 col-12" value="Sign in">
                                </div>
                            </form>
                            <div class="d-grid gap-2 col-6 mx-auto">
                                {{-- <a href="/login2" class="btn btn-primary">Login with Email</a> --}}
                                <small>Don't have an account? <a href="/register">Sign Up</a></small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection