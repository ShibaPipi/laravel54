@extends('layout.index')

@section('content')
    <!-- Page Header -->
    <header id="post-header" class="intro-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                    <div class="site-heading">
                        <h1>多想 多看</h1>
                        <br>
                        <span class="subheading">我需要三件东西：爱情友谊和图书。然而这三者之间何其相通！炽热的爱情可以充实图书的内容，图书又是人们最忠实的朋友。</span>
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
                        {!! str_limit($post->content, 200, '...') !!}
                    </h3>
                    <p class="post-meta">Star {{ $post->zans_count }}  | Comment {{ $post->comments_count }}</p>
                </div>
                <hr>
                @endforeach

                {{ $posts->links() }}
            </div>
        </div>
    </div>

    <hr>
@endsection