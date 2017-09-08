@extends('layouts.chicho-app')

@section('child-css')
    <link href="{{ asset('css/persoanl-edit.css') }}" rel="stylesheet">
@endsection


@section('content')
    <div class="persoanl-edit">

        <div class="avatar">
            <img src="https://pigjian.com/images/default_avatar.png" alt="">
            <div><button type="button" class="btn btn-primary">更换头像</button></div>
        </div>

        <div class="persoanl-info">
            <form class="form-horizontal" role="form">
                <div class="form-group">
                    <label for="firstname" class="col-sm-2 control-label">用户名</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="firstname"
                               placeholder="请输入用户名">
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastname" class="col-sm-2 control-label">邮箱地址</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="lastname"
                               placeholder="请输入邮箱地址">
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastname" class="col-sm-2 control-label">昵称</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="lastname"
                               placeholder="请输入昵称">
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastname" class="col-sm-2 control-label">网站</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="lastname"
                               placeholder="请输入网站">
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastname" class="col-sm-2 control-label">个人简述</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="lastname"
                               placeholder="请输入个人简述">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-9">
                        <button type="submit" class="btn-sm btn btn-primary  btn-lg btn-block pull-right">修改</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
@endsection



