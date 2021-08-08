@extends('layouts.main')

@section('container')

    <h1>Tulisan Dengan Kategori {{ $kategoris }}</h1>
    <br>

    @foreach ($isi as $post)
  
        <h2>
            <a class="text-decoration-none" href="/tulisan/{{ $post->slug }}"> {{ $post->judul }}</a>
        </h2>
        <p>{{ $post->user->name }}, {{ $post["tanggal"] }}</p>
        <p class="lead"> {!! $post->excerpt !!}</p>
        <b
     
    @endforeach
 

@endsection