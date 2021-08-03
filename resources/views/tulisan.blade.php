@extends('layouts.main')

@section('container')

    <h1>Selamat datang di tulisan</h1>
    <br>

    @foreach ($tulisan_post as $post)
        <h2>
            <a href="/tulisan/{{ $post->slug }}"> {{ $post->judul }}</a>
        </h2>
        <p>{{ $post["pengarang"] }}, {{ $post["tanggal"] }}</p>
        <p class="lead"> {{ $post->excerpt }}</p>
        <br>
    @endforeach

@endsection
