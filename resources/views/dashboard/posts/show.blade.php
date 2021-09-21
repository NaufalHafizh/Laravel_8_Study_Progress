@extends('dashboard.layout.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-5 mb-5">
                <h2>{{ $post['judul'] }}</h2>
                <img src="https://source.unsplash.com/1400x400?{{ $post->kategori->nama }}" class="card-img-top"
                    alt="{{ $post->kategori->nama }}">
                <p>{!! $post['isi'] !!}</p>
                <a class="text-decoration-none btn btn-success" href="/dashboard/posts"><span
                        data-feather="arrow-left"></span>
                    Back</a>
                <a class="text-decoration-none btn btn-warning" href="/dashboard/posts/{{ $post->slug }}/edit"><span
                        data-feather="edit"></span>
                    Edit</a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger border-0" onclick="return confirm('Are You Sure ?')"><span
                            data-feather="trash-2"></span> Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection
