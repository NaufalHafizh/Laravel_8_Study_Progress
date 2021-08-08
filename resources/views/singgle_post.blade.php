@extends('layouts.main')

@section('container')

    <article>
        <h2>{{ $baru["judul"] }}</h2>
        <p>{{ $baru->user->name }} dalam <a class="text-decoration-none" href="/kategori/{{ $baru->kategori->slug }}"> {{ $baru->kategori->nama}} </a> pada {{ $baru->tanggal }} </p>
        <p>{!! $baru["isi"] !!}</p>
    </article>
    
    <a class="text-decoration-none" href="/tulisan">Back</a>
@endsection