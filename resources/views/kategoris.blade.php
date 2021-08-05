@extends('layouts.main')

@section('container')

    <h1>Tulisan Dengan Kategori</h1>
    <br>

    @foreach ($kategoris as $post)

        <ul>
            <li>
                <h2>
                    <a href="/kategori/{{ $post->slug }}"> {{ $post->nama }}</a>
                </h2>
            </li>
        </ul>
     
    @endforeach
 

@endsection