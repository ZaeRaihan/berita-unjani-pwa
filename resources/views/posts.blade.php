@extends('layouts.main')

@section('container')
<style>
    p{
        font-family: "Rockwell", serif !important;
    }
</style>

<div class="row justify-content-center">
    <div class="col-md-3">
        <form action="/posts">
            @if (request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
            @if (request('author'))
                <input type="hidden" name="author" value="{{ request('author') }}">
            @endif
            <div class="input-group mb-3">
                <input type="text" class="form-control" style="margin-right: 5px" placeholder="Cari ..." name="search" value="{{ request('search') }}">
                <button class="btn btn-dark" type="submit">Cari</button>
              </div>
        </form>
    </div>
</div>

@if ($posts->count())
    <div class="container">
        <div class="row">
            @foreach ($posts as $post)    
            <div class="col-md-3 mb-3"> <!-- Mengubah col-md-3 agar ada 4 card per baris -->
                <div class="card rounded-xl">
                    <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7)">
                        <a href="/posts?category={{ $post->category->slug }}" class="text-white text-decoration-none" style="font-size: small">{{ $post->category->name }}</a>
                    </div>
                    @if ($post->image)
                    <div class="img-container">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
                    </div>
                    @else
                    <div class="img-container">
                        <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
                    </div>
                    @endif
                    <div class="card-body">
                        <p>
                            <small class="text-muted small-text">
                                <a href="https://www.unjani.ac.id/">Home</a> / <a href="/posts?author={{ $post->author->username }}">{{ $post->author->name }}</a> - {{ \Carbon\Carbon::parse($post->created_at)->locale('id')->isoFormat('MMMM D, YYYY') }}
                            </small>
                        </p>
                        <h6 class="card-title">
                            <a href="/posts/{{ $post->slug }}">
                                <?php echo strlen($post->title) > 100 ? substr($post->title, 0, 100) . '...' : $post->title; ?>
                            </a>
                        </h6>
                        
                        <p class="card-text excerpt">{!! strlen($post->excerpt) > 100 ? substr($post->excerpt, 0, 100) . '...' : $post->excerpt !!}</p>
                    </div>
                    <div class="card-footer" style="background-color: inherit; border-top: none; padding-top:0;">
                        <a href="/posts/{{ $post->slug }}" class="btn btn-success">Selengkapnya</a>
                    </div>
                </div>
                
            </div>
            @endforeach
        </div>
    </div>

@else
    <p class="text-center fs-4">No post found.</p>
@endif

<div class="d-flex justify-content-center">
    {{ $posts->links('vendor.pagination.custom') }}
</div>


@endsection
   
