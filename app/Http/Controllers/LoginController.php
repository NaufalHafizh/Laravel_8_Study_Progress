<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {

        return view('login.index', [

            'title' => 'Login',
            'active' => 'login'
        ]);
    }

    public function auth(Request $request)
    {
        $crendential = $request->validate([

            'username' => 'required|min:3',
            'password' => 'required|min:5'
        ]);

        if (Auth::attempt($crendential)) {

            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        return back()->with('LoginGagal', 'Login Gagal');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
