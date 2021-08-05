@extends('layouts.main')

@section('container')

    <article>
        <h2>{{ $baru["judul"] }}</h2>
        <p>{{ $baru->pengarang }} dalam <a href="/kategori/{{ $baru->kategori->slug }}"> {{ $baru->kategori->nama}} </a> pada {{ $baru->tanggal }} </p>
        <p>{!! $baru["isi"] !!}</p>
    </article>
    
    <a href="/tulisan">Back</a>
@endsection