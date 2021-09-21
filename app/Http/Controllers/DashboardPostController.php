<?php

namespace App\Http\Controllers;

use App\Models\Database;
use App\Models\kategori;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        return view('dashboard.posts.index', [

            'posts' => Database::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.posts.create', [

            'kategoris' => kategori::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([

            'judul' => 'required|max:255',
            'slug' => 'required|max:255',
            'kategori_id' => 'required',
            'isi' => 'required'
        ]);

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->isi), 100);

        Database::create($validatedData);

        return redirect('/dashboard')->with('berhasil', 'Tulisan Berhasil Disimpan !!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Database  $database
     * @return \Illuminate\Http\Response
     */
    public function show(Database $post)
    {

        return view('dashboard.posts.show', [

            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Database  $database
     * @return \Illuminate\Http\Response
     */
    public function edit(Database $post)
    {
        return view('/dashboard/posts/edit', [

            'post' => $post,
            'kategoris' => kategori::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Database  $database
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Database $post)
    {
        $rules = [

            'judul' => 'required|max:255',
            'kategori_id' => 'required',
            'isi' => 'required'
        ];

        if ($request->slug != $post->slug) {

            $rules['slug'] = 'required|max:255';
        }

        $validatedData = $request->validate($rules);

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->isi), 100);

        Database::where('id', $post->id)->update($validatedData);

        return redirect('/dashboard/posts')->with('berhasil', 'Tulisan Berhasil Teredit !!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Database  $database
     * @return \Illuminate\Http\Response
     */
    public function destroy(Database $post)
    {
        Database::destroy($post->id);

        return redirect('/dashboard/posts')->with('berhasil', 'Tulisan Berhasil Dihapus !!!');
    }

    public function CheckSlug(Request $request)
    {
        $slug = SlugService::createSlug(Database::class, 'slug', $request->judul);

        return response()->json(['slug' => $slug]);
    }
}
