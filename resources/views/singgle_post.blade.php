@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2>{{ $baru["judul"] }}</h2>
                <p><a class="text-decoration-none" href="/penulis/{{ $baru->penulis->username }}">{{ $baru->penulis->name }}</a> dalam <a class="text-decoration-none" href="/kategori/{{ $baru->kategori->slug }}"> {{ $baru->kategori->nama}} </a></p>
                <img src="https://source.unsplash.com/1400x400?{{ $baru->kategori->nama }}" class="card-img-top" alt="{{ $baru->kategori->nama }}">
                <p>{!! $baru["isi"] !!}</p>
                <a class="text-decoration-none" href="/tulisan">Back</a>
            </div>
        </div>
    </div>
    
@endsection