<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\database;
use App\Models\kategori;
use App\Models\User;

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

    public function kategoris()
    {

        return view('kategoris', [

            'title' => 'Jenis Kategori',
            'kategoris' => kategori::all()
        ]);
    }

    public function kategori(kategori $kategori)
    {

        return view('kategori_S', [

            'title' => $kategori->nama,
            'isi' => $kategori->Database,
            'kategoris' => $kategori->nama
        ]);
    }

    public function penulis(User $penulis)
    {
        return view('tulisan', [

            'title' => "Tulisan User",
            'isi' => $penulis->Database,
        ]);
    }
}
