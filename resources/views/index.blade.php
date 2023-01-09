@extends('layout.main')

@section('container')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-6 mb-5">
            <h2 class="text-center text-danger mb-3">Welcome to Website Kelompok 1</h2>
            <div class="card o-hidden border-o shadow-lg my-5">
                <div class="card-body p-5">
                    <div class="row">
                        <div class="col-lg-12 align-self-center mb-5">
                            <h5 class="text-center mb-3">Login with</h5>
                            <div class="d-grid gap-2 col-6 mx-auto mb-3">
                                <a href="/login" class="btn btn-primary">Account</a>
                                <a href="/login2" class="btn btn-primary">Email</a>
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