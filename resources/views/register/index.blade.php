@extends('layouts.main')

@section('container')
    <div id="box-register" class="row justify-content-center">
        <div class="col-lg-4">
            <main class="form-register">
                <form action="/register" method="POST">
                    <h1 class="h3 mb-3 fw-normal text-center">REGISTER</h1>
                    
                    <div class="form-floating">
                        <input type="text" class="form-control mb-3" id="floatingInput" placeholder="name">
                        <label class="text-dark" for="floatingInput">Name</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control mb-3" id="floatingInput" placeholder="Username">
                        <label class="text-dark" for="floatingInput">Username</label>
                    </div>
                    <div class="form-floating">
                        <input type="email" class="form-control mb-3" id="floatingInput" placeholder="name@example.com">
                        <label class="text-dark" for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label class="text-dark" for="floatingPassword">Password</label>
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