@extends('templates.admin.auth.main')
@section('contents')
    <div class="row justify-content-center">
        <div class="col-md-6 text-center mb-5">
            <h2 class="heading-section">{{ config('name.admin_site_title') }}</h2>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4">
            <div class="login-wrap py-5">
                <div class="img d-flex align-items-center justify-content-center" style="background-image: url({{ asset('libraries/login-form-19/images/bg.jpg') }});"></div>
                <h3 class="text-center mb-0">Welcome</h3>
                <p class="text-center">Sign in by entering the information below</p>
                <form method="POST" class="login-form">
                    @csrf
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                     
                        <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
                        <input type="text" name="name" class="form-control" placeholder="Username" required>
                    </div>
                    @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-lock"></span></div>
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn form-control btn-primary rounded submit px-3">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection