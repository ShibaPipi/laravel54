@extends('layout.index')

@section('content')
    <!-- Page Header -->
    <header id="show-header" class="intro-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                    <div class="post-heading">
                        <h1>{{ $post->title }}</h1>
                        <br>
                        <span class="meta">Posted by <a href="#">{{ $post->user->name }}</a> on {{ $post->created_at->toFormattedDateString() }}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                    <div class="blog-post">
                        <div style="display:inline-flex">
                            @can('update', $post)
                                <a style="margin: auto"  href="/posts/{{ $post->id }}/edit">
                                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                </a>
                            @endcan

                            @can('delete', $post)
                                <a style="margin: auto"  href="/posts/{{ $post->id }}/delete">
                                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                </a>
                            @endcan
                        </div>
                        {!! $post->content !!}
                        <div>
                            @if($post->zan(\Auth::id())->exists())
                                <a href="/posts/{{ $post->id }}/unzan" type="button" class="btn btn-default btn-lg">取消赞</a>
                            @else
                                <a href="/posts/{{ $post->id }}/zan" type="button" class="btn btn-primary btn-lg">赞</a>
                            @endif
                        </div>
                    </div>
                    {{ $post->prevId }}
                    <div class="panel panel-default">
                        <!-- Default panel contents -->
                        <div class="panel-heading">评论</div>

                        <!-- List group -->
                        <ul class="list-group">
                            @foreach($post->comments as $comment)
                                <li class="list-group-item">
                                    <h5>{{ $comment->created_at }} by {{ $comment->user->name }}</h5>
                                    <div>{{ $comment->content }}</div>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="panel panel-default">
                        <!-- Default panel contents -->
                        <div class="panel-heading">发表评论</div>

                        <!-- List group -->
                        <ul class="list-group">
                            <form action="/posts/{{ $post->id }}/comment" method="post">
                                {{ csrf_field() }}
                                <li class="list-group-item">
                                    <textarea name="content" class="form-control" rows="10"></textarea>
                                    @include('layout.error')
                                    <button class="btn btn-default" type="submit">提交</button>
                                </li>
                            </form>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </article>

    <hr>
@endsection