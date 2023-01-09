@extends('layout.main')

@section('container')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <div class="card o-hidden border-o shadow-lg my-5">
                <div class="card-body p-4">
                    <div class="row">
                        <div class="col-lg-12 align-self-center mb-3">
                            <h3 class="text-center mb-3">Login</h3>
                            <form action="/login" method="POST">
                                <div class="form-group mb-3">
                                    <input type="email" class="form-control form-control-lg" id="email" name="email"
                                        placeholder="example@mail.com" required>
                                </div>
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <input type="submit" class="btn btn-primary mb-1 col-12" value="Sign in">
                                    <a href="/login" class="btn btn-primary">Login with Account</a>
                                </div>
                            </form>
                        </div>
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <small>Don't have an account? <a href="/register">Sign Up</a></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection