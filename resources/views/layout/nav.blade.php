<nav class="navbar fixed-top navbar-toggleable-md navbar-light" id="mainNav">
    <div class="container">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu <i class="fa fa-bars"></i>
        </button>
        <a class="navbar-brand page-scroll" href="/posts">Get Started</a>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="/posts">Posts</a>
                </li>
                @if(\Auth::id())
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="/posts/create">Create</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="/notices">Notices</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link page-scroll dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">欢迎你，{{ \Auth::user()->name }}  <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="nav-item">
                                <a class="nav-link page-scroll" href="/user/{{ \Auth::id() }}">我的主页</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link page-scroll" href="/user/5/setting">个人设置</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link page-scroll" href="/logout">登出</a>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="/register">去注册</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="/login">登录</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>

{{--<div class="blog-masthead">--}}
    {{--<div class="container">--}}
        {{--<form action="/posts/search" method="GET">--}}
            {{--<ul class="nav navbar-nav navbar-left">--}}
                {{--<li>--}}
                    {{--<a class="blog-nav-item " href="/">首页</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a class="blog-nav-item " href="/posts">文章</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a class="blog-nav-item" href="/posts/create">写文章</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a class="blog-nav-item" href="/notices">通知</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<input name="query" type="text" value="@if(!empty($query)){{$query}}@endif" class="form-control" style="margin-top:10px" placeholder="搜索词">--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<button class="btn btn-default" style="margin-top:10px" type="submit" disabled>Go!</button>--}}
                {{--</li>--}}
            {{--</ul>--}}

            {{--<ul class="nav navbar-nav navbar-right">--}}
                {{--<li class="dropdown">--}}
                    {{--@if(\Auth::id())--}}
                        {{--<div>--}}
                            {{--<img src="/storage/9f0b0809fd136c389c20f949baae3957/iBkvipBCiX6cHitZSdTaXydpen5PBiul7yYCc88O.jpeg" alt="" class="img-rounded" style="border-radius:500px; height: 30px">--}}
                            {{--<a href="#" class="blog-nav-item dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">欢迎你，{{ \Auth::user()->name }}  <span class="caret"></span></a>--}}
                            {{--<ul class="dropdown-menu">--}}
                                {{--<li><a href="/user/{{ \Auth::id() }}">我的主页</a></li>--}}
                                {{--<li><a href="/user/5/setting">个人设置</a></li>--}}
                                {{--<li><a href="/logout">登出</a></li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    {{--@else--}}
                        {{--<div>--}}
                            {{--<a href="/register" class="blog-nav-item dropdown-toggle">去注册</a>--}}
                            {{--<a href="/login" class="blog-nav-item dropdown-toggle">登录</a>--}}
                        {{--</div>--}}
                    {{--@endif--}}
                {{--</li>--}}
            {{--</ul>--}}
        {{--</form>--}}
    {{--</div>--}}
{{--</div>--}}