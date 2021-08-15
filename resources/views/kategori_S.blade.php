@extends('layouts.main')

@section('container')

    <h1>Tulisan Dengan Kategori {{ $kategoris }}</h1>
    <br>

    @foreach ($isi as $post)
  
        <h4>
            <a class="text-decoration-none" href="/tulisan/{{ $post->slug }}"> {{ $post->judul }}</a>
        </h4>
        <p>{{ $post->penulis->name }}, {{ $post["created_at"] }}</p>
        <p class="lead"> {!! $post->excerpt !!}</p>
        <br>
     
    @endforeach
 

@endsection