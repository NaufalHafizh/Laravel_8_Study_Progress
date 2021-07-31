@extends('layouts.main')

@section('container')

    <h1>Selamat datang di tulisan</h1>
    <br>

    @foreach ($tulisan_post as $post)
        <h2>
            <a href="/tulisan/{{ $post["id_tulisan"] }}"> {{ $post["judul"] }}</a>
        </h2>
        <p>{{ $post["pengarang"] }}, {{ $post["tanggal"] }}</p>
        <p class="lead"> {{ $post["isi"] }}</p>
        <br>
    @endforeach

@endsection