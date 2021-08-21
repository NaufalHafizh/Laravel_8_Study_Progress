<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\database;
use App\Models\User;
use App\Models\kategori;

class databaseControler extends Controller
{
    public function index()
    {

        return view('tulisan', [

            "title" => "Semua Tulisan",
            "isi" => database::with(['penulis', 'kategori'])->latest()->get()
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

        return view('tulisan', [

            'title' => "Tulisan Dengan Kategori : $kategori->nama",
            'isi' => $kategori->Database->load('penulis', 'kategori')
        ]);
    }

    public function penulis(User $penulis)
    {
        return view('tulisan', [

            'title' => "Tulisan Dari Penulis : $penulis->name",
            'isi' => $penulis->Database->load('penulis', 'kategori')
        ]);
    }
}
