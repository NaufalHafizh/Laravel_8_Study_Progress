<?php

use App\Models\database;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\databaseControler;
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

        "title" => "HOME"
    ]);
});

Route::get('/about', function () {
    return view('about', [

        "title" => "ABOUT",
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
