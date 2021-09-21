@extends('layouts.main')

@section('container')
    <div id="box-login" class="row justify-content-center">
        <div class="col-md-4">
            @if (session()->has('berhasil'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    {{ session('berhasil') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (session()->has('LoginGagal'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('LoginGagal') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <main class="form-signin">
                <form action="/login" method="POST">
                    @csrf
                    <h1 class="h3 mb-3 fw-normal text-center">LOGIN</h1>
                
                    <div class="form-floating">
                        <input type="text" class="form-control mb-3 @error('username') is-invalid @enderror" name="username" id="username" placeholder="username" autofocus required value="{{ old('username') }}">
                        <label class="text-dark" for="username">Username</label>
                    </div>
                    @error('username')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <div class="form-floating">
                        <input type="password" class="form-control  @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password">
                        <label class="text-dark" for="password">Password</label>
                    </div>
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <button class="w-100 btn btn-lg btn-primary mt-4 mb-3" type="submit">Sign in</button>
                </form>
                <div class="text-center">
                    <small>Tidak Punya Akun ? <a class="text-decoration-none" href="/register">Register</a></small>
                </div>
            </main>
        </div>
    </div>
    
    
@endsection