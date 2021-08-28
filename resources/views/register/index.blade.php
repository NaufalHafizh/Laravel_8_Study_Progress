@extends('layouts.main')

@section('container')
    <div id="box-register" class="row justify-content-center">
        <div class="col-lg-4">
            <main class="form-register">
                <form action="/register" method="POST">

                    @csrf
                    <h1 class="h3 mb-3 fw-normal text-center">REGISTER</h1>
                    
                    <div class="form-floating">
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="name" required value="{{ old('name') }}">
                        <label for="name" class="text-dark">Name</label>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="text" name="username" class="form-control mt-3 @error('username') is-invalid @enderror" id="udatasername" placeholder="username" required value="{{ old('username') }}">
                        <label class="text-dark" for="username">Username</label>
                        @error('Username')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="email" name="email" class="form-control mt-3 @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                        <label class="text-dark" for="email">Email address</label>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password" class="form-control mt-3 @error('password') is-invalid @enderror" id="password" placeholder="Password" required value="{{ old('password') }}">
                        <label class="text-dark" for="password">Password</label>
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button class="w-100 btn btn-lg btn-primary mt-4 mb-3" type="submit">Register</button>
                </form>
                <div class="text-center">
                    <small>Punya Akun ? <a class="text-decoration-none" href="/login"> Login</a></small>
                </div>
            </main>
        </div>
    </div>
    
    
@endsection