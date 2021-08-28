@extends('layouts.main')

@section('container')
    <div id="box-login" class="row justify-content-center">
        <div class="col-md-4">
            <main class="form-signin">
                <form>
                    <h1 class="h3 mb-3 fw-normal text-center">LOGIN</h1>
                
                    <div class="form-floating">
                        <input type="email" class="form-control mb-3" id="floatingInput" placeholder="name@example.com">
                        <label class="text-dark" for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label class="text-dark" for="floatingPassword">Password</label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary mt-4 mb-3" type="submit">Sign in</button>
                </form>
                <div class="text-center">
                    <small>Tidak Punya Akun ? <a class="text-decoration-none" href="/register">Register</a></small>
                </div>
            </main>
        </div>
    </div>
    
    
@endsection