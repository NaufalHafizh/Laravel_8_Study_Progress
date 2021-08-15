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
Route::get('/tulisan/{post:slug}', [databaseControler::class, 'tampilkan']);

Route::get('/Kategoris', function () {

    return view('kategoris', [

        'title' => 'Jenis Kategori',
        'kategoris' => kategori::all()
    ]);
});

Route::get('/kategori/{kategori:slug}', function (kategori $kategori) {

    return view('kategori_S', [

        'title' => $kategori->nama,
        'isi' => $kategori->Database,
        'kategoris' => $kategori->nama
    ]);
});

Route::get('/penulis/{penulis:username}', function (User $penulis) {

    return view('tulisan', [

        'title' => "Tulisan User",
        'isi' => $penulis->Database,
    ]);
});
