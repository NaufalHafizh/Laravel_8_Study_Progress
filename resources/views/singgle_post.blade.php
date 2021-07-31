@extends('layouts.main')

@section('container')

    <article>
        <h2>{{ $baru["judul"] }}</h2>
        <p>{{ $baru["pengarang"] }}, {{ $baru["tanggal"] }} </p>
        <p>{{ $baru["isi"] }}</p>
    </article>
    
    <a href="/tulisan">Back</a>
@endsection