@extends('layouts.main')

@section('container')

    <h1>Selamat datang di tulisan</h1>
    <br>

    @foreach ($isi as $post)
    
    <article class="mb-5">
        <h2>
            <a class="text-decoration-none text-light" href="/tulisan/{{ $post->slug }}"> {{ $post->judul }}</a>
        </h2>
        <p> <a class="text-decoration-none" href="/penulis/{{ $post->penulis->username }}">{{ $post->penulis->name  }}</a> dalam <a class="text-decoration-none" href="/kategori/{{ $post->kategori->slug }}"> {{ $post->kategori->nama}} </a> tanggal {{ $post["created_at"] }} </p>
        <p class="lead"> {!! $post->excerpt !!}</p>
        <a class="text-decoration-none" href="/tulisan/{{ $post->slug }}"> Read more...</a> 
    </article>
        
    @endforeach

@endsection
