@extends('layouts.admin-app')

@section('child-css-js')
    <link href="{{ asset('css/images.css') }}" rel="stylesheet">
@endsection

@section('breadcrumb')
    <ol class="breadcrumb margin-bottom-0">
        <li><a href="#">首页</a></li>
        <li><a href="#">图片管理</a></li>
        {{--<li class="active">十一月</li>--}}
    </ol>
@endsection

@section('content')
    <div class="container" style="margin-bottom: 30px;">

        <div class="image-item">
            <div class="img-box">
                <img src="https://ss0.bdstatic.com/70cFvHSh_Q1YnxGkpoWK1HF6hhy/it/u=1517415098,4061300270&fm=11&gp=0.jpg" alt="">
            </div>
            <div class="img-operate">
                <a href="#"><span class="glyphicon glyphicon-zoom-in pull-left operate"></span></a>
                <a href="#"><span class="glyphicon glyphicon-trash pull-right operate"></span></a>
            </div>
        </div>

        <div class="image-item">
            <div class="img-box">
                <img src="https://ss1.bdstatic.com/70cFuXSh_Q1YnxGkpoWK1HF6hhy/it/u=2537734184,1546216431&fm=11&gp=0.jpg" alt="">
            </div>
            <div class="img-operate">
                <a href="#"><span class="glyphicon glyphicon-zoom-in pull-left operate"></span></a>
                <a href="#"><span class="glyphicon glyphicon-trash pull-right operate"></span></a>
            </div>
        </div>

        <div class="image-item">
            <div class="img-box">
                <img src="https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=2750694183,4138033973&fm=200&gp=0.jpg" alt="">
            </div>
            <div class="img-operate">
                <a href="#"><span class="glyphicon glyphicon-zoom-in pull-left operate"></span></a>
                <a href="#"><span class="glyphicon glyphicon-trash pull-right operate"></span></a>
            </div>
        </div>

        <div class="image-item">
            <div class="img-box">
                <img src="https://ss3.bdstatic.com/70cFv8Sh_Q1YnxGkpoWK1HF6hhy/it/u=1629491347,1018543730&fm=27&gp=0.jpg" alt="">
            </div>
            <div class="img-operate">
                <a href="#"><span class="glyphicon glyphicon-zoom-in pull-left operate"></span></a>
                <a href="#"><span class="glyphicon glyphicon-trash pull-right operate"></span></a>
            </div>
        </div>

        <div class="image-item">
            <div class="img-box">
                <img src="https://ss3.bdstatic.com/70cFv8Sh_Q1YnxGkpoWK1HF6hhy/it/u=2205469800,1660046097&fm=27&gp=0.jpg" alt="">
            </div>
            <div class="img-operate">
                <a href="#"><span class="glyphicon glyphicon-zoom-in pull-left operate"></span></a>
                <a href="#"><span class="glyphicon glyphicon-trash pull-right operate"></span></a>
            </div>
        </div>

        <div class="image-item">
            <div class="img-box">
                <img src="https://ss1.bdstatic.com/70cFuXSh_Q1YnxGkpoWK1HF6hhy/it/u=1156197173,470200848&fm=27&gp=0.jpg" alt="">
            </div>
            <div class="img-operate">
                <a href="#"><span class="glyphicon glyphicon-zoom-in pull-left operate"></span></a>
                <a href="#"><span class="glyphicon glyphicon-trash pull-right operate"></span></a>
            </div>
        </div>

    </div>
@endsection