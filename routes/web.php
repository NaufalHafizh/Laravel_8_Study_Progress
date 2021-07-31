<?php

use App\Models\database;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\databaseControler;

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
Route::get('tulisan/{id_tulisan}', [databaseControler::class, 'tampilkan']);
