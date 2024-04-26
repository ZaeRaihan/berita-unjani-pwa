@extends('layouts.mainpost')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <div class="card mb-4">
                <div class="card-body">
                    <h3>{{ $post->title }}</h3>
                    <hr> <!-- Garis Horizontal -->
                    <p>
                        <small class="text-muted small-text">
                            <a href="https://www.unjani.ac.id/">Home</a> / <a href="/posts?category={{ $post->category->slug }}">{{ $post->category->slug }}</a>
                            <br>
                            <a href="/posts?author={{ $post->author->username }}">{{ $post->author->name }}</a> - {{ \Carbon\Carbon::parse($post->created_at)->locale('id')->isoFormat('MMMM D, YYYY') }}
                        </small>
                    </p>
                    <p>
                    </p>
                    @if ($post->image)
                    <div style="overflow:hidden;">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
                    </div>
                    @else
                    <div style="overflow:hidden;">
                        <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
                    </div>
                    @endif

                    <article class="my-3 fs-5" style="font-family: 'Open Sans', sans-serif;">
                        {!! $post->body !!}
                    </article>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card mb-3">
                <div class="card-header">
                    <h6><span class="icon-video-camera"></span> The New UNJANI</h6>
                </div>
                <div class="card-body">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/T2Bp7L4yYio" allowfullscreen></iframe>
                    </div>
                </div>
            </div>            
            <div class="card mb-3">
                <div class="card-header">
                    <h6><span class="icon-file-text"></span> Latest Posts</h6>
                </div>
                <div class="card-body">
                    @foreach(App\Models\Post::latest()->take(5)->get() as $post)
                    <div class="post-card">
                        <div class="post-image">
                            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}">
                        </div>
                        <div class="post-details">
                            <h6 class="post-title"><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h6>
                            <div class="post-meta">
                                <span class="post-author-date">By {{ $post->author->name }} / {{ $post->created_at->locale('id')->isoFormat('MMMM D, YYYY') }}</span>
                            </div>                            
                        </div>
                    </div>
                    @endforeach
                </div>        
            </div>            
            
        </div>
        <a href="/" class="btn btn-success mb-3" style="margin-left: 15px"><span data-feather="arrow-left"></span> Kembali</a>
    </div>
</div>

@endsection
