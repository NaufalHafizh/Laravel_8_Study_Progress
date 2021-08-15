<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\database;

class databaseControler extends Controller
{
    public function index()
    {

        return view('tulisan', [

            "title" => "TULISAN",
            "isi" => database::all()
        ]);
    }

    public function tampilkan(database $post)
    {

        return view('singgle_post', [

            "title" => "Singgle Post",
            "baru" => $post
        ]);
    }
}
