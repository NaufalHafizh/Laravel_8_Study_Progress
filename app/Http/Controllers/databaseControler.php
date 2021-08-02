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
            "tulisan_post" => database::all()
        ]);
    }

    public function tampilkan($id_tulisan)
    {

        return view('singgle_post', [

            "title" => "Singgle Post",
            "baru" => database::find($id_tulisan)
        ]);
    }
}
