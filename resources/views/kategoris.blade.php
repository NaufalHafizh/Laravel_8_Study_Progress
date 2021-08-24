@extends('layouts.main')

@section('container')

    <h1>Tulisan Dengan Kategori</h1>
    <br>

    

    <div class="container">
        <div class="row">
            @foreach ($kategoris as $post)
                <div class="col-md-4">
                    <a href="/tulisan?kategori={{ $post->slug }}">
                        <div class="card text-light w-75">
                            <img src="https://source.unsplash.com/700x700?{{ $post->nama }}" class="card-img-top" alt="{{ $post->nama }}">
                            <div class="card-img-overlay">
                                <h2 class="card-title" >{{ $post->nama }}</h2>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

 

@endsection