@extends('layouts.main')

@section('container')

    <h1>ABOUT</h1>
    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima minus atque ipsa similique numquam delectus odio voluptates saepe porro quis accusantium, eum aut. Sunt earum doloremque, nihil facere accusamus iure!</p>
    <p class="lead">Nama Saya, {{ $nama }}</p>
    <img src="{{ $image }}" alt="{{ $nama }}" width="200px" height="200px" class="rounded-circle">
    <p class="lead"> {{ $biasa }} </p>

@endsection
 
