@extends('layouts.main')

@section('container')

    <h1 class="text-center">{{ $title }}</h1>
    <br>
    
    <div class="row justify-content-center mb-3">
      <div class="col-md-6">
        <form action="/tulisan">
          @if (request('kategori'))

              <input type="hidden" name="kategori" value="{{ request('kategori') }}">
              
          @endif
          @if (request('penulis'))

              <input type="hidden" name="penulis" value="{{ request('penulis') }}">
              
          @endif
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search...." name="search" value="{{ request('search') }}">
            <button class="btn btn-outline-light" type="submit">Search</button>
          </div>
        </form>
      </div>
    </div>

    @if ($isi->count())
    <div class="card mb-3 text-dark text-center">
        <img src="https://source.unsplash.com/1400x400?{{ $isi[0]->kategori->nama }}" class="card-img-top" alt="{{ $isi[0]->kategori->nama }}">
        <div class="card-body">
          <h5 class="card-title"><a class="text-decoration-none text-dark" href="/tulisan/{{ $isi[0]->slug }}"> {{ $isi[0]->judul }}</a></h5>
          <p> <a class="text-decoration-none" href="/tulisan?penulis={{ $isi[0]->penulis->username }}">{{ $isi[0]->penulis->name  }}</a> dalam <a class="text-decoration-none" href="/tulisan?kategori={{ $isi[0]->kategori->slug }}"> {{ $isi[0]->kategori->nama}} </a><small class="text-muted">{{ $isi[0]->created_at->diffForHumans() }}</small></p>
          <p class="card-text">{{ $isi[0]->excerpt }}</p>
          <a class="text-decoration-none" href="/tulisan/{{ $isi[0]->slug }}"> Read more...</a> 
        </div>
      </div>
   

    <div class="container">
        <div class="row">
            @foreach ($isi->skip(1) as $post)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="position-absolute bg-dark px-3 py-2"><a class="text-decoration-none text-light" href="/tulisan?kategori={{ $post->kategori->slug }}">{{ $post->kategori->nama }}</a></div>
                    <img src="https://source.unsplash.com/500x400?{{ $post->kategori->nama }}" class="card-img-top" alt="{{ $post->kategori->nama }}">
                    <div class="card-body text-dark">
                      <h5 class="card-title"><a class="text-decoration-none text-dark" href="/tulisan/{{ $post->slug }}"> {{ $post->judul }}</a></h5>
                      <p> <a class="text-decoration-none" href="/tulisan?penulis={{ $post->penulis->username }}">{{ $post->penulis->name  }}</a><small class="text-muted"> {{ $isi[0]->created_at->diffForHumans() }}</small></p>
                      <p class="card-text">{!! $post->excerpt !!}</p>
                      <a class="text-decoration-none" href="/tulisan/{{ $post->slug }}"> Read more...</a> 
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </div>

    @else
      <p class="text-center fs-1">No Post Left.</p>
    @endif

    <div class="d-flex justify-content-center">{{ $isi->links() }}</div>
@endsection
