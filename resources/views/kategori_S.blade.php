@extends('layouts.main')

@section('container')

    <h1>Tulisan Dengan Kategori {{ $kategoris }}</h1>
    <br>

    @foreach ($isi as $post)
  
        <h3>
            <a class="text-decoration-none" href="/tulisan/{{ $post->slug }}"> {{ $post->judul }}</a>
        </h3>
        <p>{{ $post->penulis->name }}, {{ $post["tanggal"] }}</p>
        <p class="lead"> {!! $post->excerpt !!}</p>
        <br>
     
    @endforeach
 

@endsection