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

        $title = ' ';
        if (request('kategori')) {
            $kategori = kategori::firstWhere('slug', request('kategori'));
            $title = ' Dalam ' . $kategori->nama;
        }

        if (request('penulis')) {
            $penulis = User::firstWhere('username', request('penulis'));
            $title = ' Dalam ' . $penulis->name;
        }

        return view('tulisan', [
            "active" => "All Post",
            "title" => "Semua Tulisan" . $title,
            "isi" => database::latest()->Filter(request(['search', 'kategori', 'penulis']))->paginate(7)->withQueryString()
        ]);
    }

    public function tampilkan(database $post)
    {

        return view('singgle_post', [

            "active" => "TULISAN",
            "title" => "Singgle Post",
            "baru" => $post
        ]);
    }

    public function kategoris()
    {

        return view('kategoris', [

            "active" => "KATEGORIS",
            'title' => 'Jenis Kategori',
            'kategoris' => kategori::all()
        ]);
    }

    public function kategori(kategori $kategori)
    {

        return view('tulisan', [

            "active" => "KATEGORIS",
            'title' => "Tulisan Dengan Kategori : $kategori->nama",
            'isi' => $kategori->Database->load('penulis', 'kategori')
        ]);
    }

    public function penulis(User $penulis)
    {
        return view('tulisan', [

            "active" => "KATEGORIS",
            'title' => "Tulisan Dari Penulis : $penulis->name",
            'isi' => $penulis->Database->load('penulis', 'kategori')
        ]);
    }
}
