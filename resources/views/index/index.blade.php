@extends('layout.index')

@section('content')
    <!-- Page Header -->
    <header id="index-header" class="intro-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                    <div class="site-heading">
                        <h1>柴犬皮皮的 Blog</h1>
                        <br>
                        <span class="subheading">A Blog Created By Shiba Inu Pipi</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                @foreach($posts as $post)
                    <div class="post-preview">
                        <a href="/posts/{{ $post->id }}">
                            <h2 class="post-title">
                                {{ $post->title }}
                            </h2>
                        </a>
                        <br>
                        <p class="post-meta">Posted by <a href="/user/{{ $post->user->id }}">{{ $post->user->name }}</a> on {{ $post->created_at->toFormattedDateString() }}</p>
                        <h3 class="post-subtitle">
                            {!! str_limit($post->content, 100, '...') !!}
                        </h3>
                        <p class="post-meta">Star {{ $post->zans_count }}  | Comment {{ $post->comments_count }}</p>
                    </div>
                    <hr>
            @endforeach
            <!-- Pager -->
                <div class="clearfix">
                    <a class="btn btn-secondary float-right" href="/posts">Older Posts &rarr;</a>
                </div>
            </div>
        </div>
    </div>

    <hr>
@endsection