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
    <link href="{{ asset('css/admin_common.css') }}" rel="stylesheet">
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    @yield('child-css-js')
</head>
<body>


<div id="container-left">

    <div id="admin-logo">
        <img src="https://pigjian.com/images/default_avatar.png" alt="">
    </div>

    <div id="left-nav">

        <a href="{{ url('admin') }}" class="nav-a">
            <div class="nav-item">
                <span class="glyphicon glyphicon-th-list margin-right-10"></span>
                首页
                <span class="glyphicon glyphicon-chevron-right set-right"></span>
            </div>
        </a>

        <a href="{{ url('admin/edit_article') }}" class="nav-a">
            <div class="nav-item">
                <span class="glyphicon glyphicon-th-list margin-right-10"></span>
                写文章
                <span class="glyphicon glyphicon-chevron-right set-right"></span>
            </div>
        </a>

        <a href="{{ url('admin/article') }}" class="nav-a">
            <div class="nav-item">
                <span class="glyphicon glyphicon-th-list margin-right-10"></span>
                文章管理
                <span class="glyphicon glyphicon-chevron-right set-right"></span>
            </div>
        </a>

        <a href="{{ url('admin/images') }}" class="nav-a">
            <div class="nav-item">
                <span class="glyphicon glyphicon-th-list margin-right-10"></span>
                图片管理
                <span class="glyphicon glyphicon-chevron-right set-right"></span>
            </div>
        </a>

        <a href="{{ url('admin/upload_image') }}" class="nav-a">
            <div class="nav-item">
                <span class="glyphicon glyphicon-th-list margin-right-10"></span>
                上传图片
                <span class="glyphicon glyphicon-chevron-right set-right"></span>
            </div>
        </a>

        <a href="{{ url('admin/tags') }}" class="nav-a">
            <div class="nav-item">
                <span class="glyphicon glyphicon-th-list margin-right-10"></span>
                标签管理
                <span class="glyphicon glyphicon-chevron-right set-right"></span>
            </div>
        </a>

        <a href="{{ url('admin/edit_tag') }}" class="nav-a">
            <div class="nav-item">
                <span class="glyphicon glyphicon-th-list margin-right-10"></span>
                编辑标签
                <span class="glyphicon glyphicon-chevron-right set-right"></span>
            </div>
        </a>

    </div>

</div>

<div id="container">

    <!-- pc header nav-->
    <div id="blog-header">
        <div id="blog-nav">
            <!-- <div id="left-nav">
                <div class="item-nav"><a href="#">首页</a></div>
                <div class="item-nav"><a href="#">文章</a></div>
                <div class="item-nav"><a href="#">标签</a></div>
                <div class="item-nav"><a href="#">分享</a></div>
            </div> -->
            <div id="right-nav">
                @if (Auth::guard('admin')->check())

                <div class="item-nav"><a href="#"
                                         onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">注销</a></div>
                <form id="logout-form" action="{{ url('admin/logout') }}" method="POST" style="display: none;">
                     {{ csrf_field() }}
                </form>
                <div class="item-nav"><a href="#">{{ Auth::guard('admin')->user()->name }}</a></div>
                <div class="search"><input type="text" placeholder="search"></div>
                @endif
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
                    <li><a href="#" style="color: #fff;">首页</a></li>
                    <li><a href="#" style="color: #fff;">文章</a></li>
                    <li><a href="#" style="color: #fff;">标签 </a></li>
                    <li><a href="#" style="color: #fff;">分享 </a></li>
                    <li><a href="#" style="color: #fff;">登录 </a></li>
                    <li><a href="#" style="color: #fff;">注册 </a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- 面包屑导航  -->
    @yield('breadcrumb')
    {{--<ol class="breadcrumb margin-bottom-0">--}}
        {{--<li><a href="#">Home</a></li>--}}
        {{--<!-- <li><a href="#">2013</a></li>--}}
        {{--<li class="active">十一月</li> -->--}}
    {{--</ol>--}}


    @yield('content')

    {{--<div id="content">--}}
        {{--我是内容哦我是内容哦我是内容哦我是内容哦我是内容哦我是内容哦--}}
    {{--</div>--}}





    <!-- footer -->
    <div id="footer">

    <div class="for-record">
        @copy chicho 2017 粤ICP备16020344号-1
    </div>

</div>

</div>

@yield('fill-script')
</body>
</html>