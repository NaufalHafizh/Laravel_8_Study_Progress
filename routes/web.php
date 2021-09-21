<?php

use App\Http\Controllers\DashboardPostController;
use App\Models\database;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\databaseControler;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Models\kategori;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//closures 
Route::get('/', function () {
    return view('home', [
        "title" => "HOME",
        "active" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [

        "title" => "ABOUT",
        "active" => "Blog",
        "nama" => "Muhammad Naufal Hafizh",
        "biasa" => "main game dan koding berbasis web",
        "image" => "gambar.jpg"
    ]);
});


//Controller
Route::get('/tulisan', [databaseControler::class, 'index']);

//slug
Route::get('/tulisan/{post:slug}', [databaseControler::class, 'tampilkan']);

//view all category
Route::get('/Kategoris', [databaseControler::class, 'kategoris']);

//kategori tulisan
Route::get('/kategori/{kategori:slug}', [databaseControler::class, 'kategori']);

//penulis
Route::get('/penulis/{penulis:username}', [databaseControler::class, 'penulis']);

//login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'auth']);
Route::post('/logout', [LoginController::class, 'logout']);

//register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');

//usser reg
Route::post('/register', [RegisterController::class, 'store']);



Route::get('/dashboard', function () {

    return view('dashboard.index');
})->middleware('auth');

//Auto Slug
Route::get('/dashboard/posts/CheckSlug', [DashboardPostController::class, 'CheckSlug']);

//create, update, deelete, read
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
