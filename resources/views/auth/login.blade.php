@extends('layouts.auth')



@push('title')
<title>Login</title>
@endpush

@section('content')
<div class="container-fluid bg-light p-5">
    <h1 class="text-center text-secondary"><i class="fa-solid fa-user"></i> User Login</h1>
</div>

<section>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <img src="{{ asset('build/assets/register.jpg') }}" class="rounded-3 img-fluid" alt="Login Image">
                    </div>
                    <div class="col-lg-6">
                        <div class="card shadow-sm border-0 rounded-3">
                            <div class="card-body p-4">
                                <form method="POST" action="{{route('login.post')}}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email address</label>
                                        <input type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" id="email" name="email" placeholder="name@your_email.com" value="{{ old('email') }}" required autofocus>
                                        @error('email')
                                            <span class="text-danger small" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password" required>
                                        @error('password')
                                            <span class="text-danger small" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn theme-orange-btn text-light form-control form-control-lg mb-3">Sign In</button>
                                    @if(session()->has("success"))
                                        <div class="alert alert-success mt-2">
                                            {{ session()->get("success") }}
                                        </div>
                                    @endif
                                    @if(session()->has("error"))
                                        <div class="alert alert-danger mt-2">
                                            {{ session()->get("error") }}
                                        </div>
                                    @endif
                                    <div class="text-center mt-4">
                                        Don't have an account? <a href="{{route('register')}}"class="text-decoration-none">Signup</a>
                                    </div>
                                    @if (Route::has('password.request'))
                                        <div class="text-center mt-2">
                                            <a href="">Forgot Your Password?</a>
                                        </div>
                                    @endif
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection