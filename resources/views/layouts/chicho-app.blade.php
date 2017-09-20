<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" >
    <link href="{{ asset('css/common.css') }}" rel="stylesheet">

    @yield('child-css')

    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
</head>
<body>

<div id="container">

    <!-- pc header nav-->
    <div id="blog-header">
        <div id="blog-nav">
            <div id="left-nav">
                <div class="item-nav"><a href="{{ url('/') }}">首页</a></div>
                <div class="item-nav"><a href="{{ url('articles') }}">文章</a></div>
                <div class="item-nav"><a href="#">标签</a></div>
                <div class="item-nav"><a href="{{ url('/donate') }}">打赏</a></div>
            </div>
            <div id="right-nav">
                @if (Auth::guest())
                    <div class="item-nav"><a href="{{ url('/register') }}">注册</a></div>
                    <div class="item-nav"><a href="{{ url('/login') }}">登录</a></div>
                @else

                    <div class="item-nav"><a href="{{ route('logout') }}"
                                             onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            注销</a></div>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                    <div class="item-nav"><a href="{{ url('/personal') }}">{{ Auth::user()->name }}</a></div>
                @endif
                <div class="search"><input type="text" placeholder="search"></div>
            </div>
        </div>
    </div>

    <!-- mobile nav -->
    <nav class="navbar navbar-default" id="mobile-nav" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header" id="mobile-header">
                <button id="cc-button-nav" type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target="#chicho-navbar-collapse">
                    <span class="icon-bar" style="background-color: #fff;"></span>
                    <span class="icon-bar" style="background-color: #fff;"></span>
                    <span class="icon-bar" style="background-color: #fff;"></span>
                </button>
                <a class="navbar-brand" style="color: #fff;" href="#">chicho</a>
            </div>
            <div class="collapse navbar-collapse" id="chicho-navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/') }}" style="color: #fff;">首页</a></li>
                    <li><a href="{{ url('/articles') }}" style="color: #fff;">文章</a></li>
                    <li><a href="{{ url('/personal') }}" style="color: #fff;">生活分享 </a></li>
                    <li><a href="{{ url('/donate') }}" style="color: #fff;">打赏 </a></li>
                    <li><a href="{{ url('/login') }}" style="color: #fff;">登录 </a></li>
                    <li><a href="{{ url('/register') }}" style="color: #fff;">注册 </a></li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('banner')
    <!-- common header -->

    @yield('content')


    <!-- footer -->
    <div id="footer" style="margin: 0;">
        <div class="connect">
            <a href="#"><span class="glyphicon glyphicon-home" style="color: #fff;"></span></a>

        </div>

        <div class="link">
            <a href="#">友情链接</a>
            <a href="#">关于我</a>
        </div>

        <div class="for-record">
            @copy chicho 2017 粤ICP备16020344号-1
        </div>

    </div>

</div>


</body>
</html>
