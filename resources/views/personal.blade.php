@extends('layouts.chicho-app')

@section('child-css')
    <link href="{{ asset('css/persoanl.css') }}" rel="stylesheet">
@endsection

@section('banner')
    <div id="banner">
        <div id="persoanl">
            <div id="avatar"><img src="https://pigjian.com/images/default_avatar.png" alt=""></div>
            <div id="persoanl-info">
                <div class="persoanl-name">chichoyi</div>
                <div class="persoanl-motto">nothing is impossiblenothing is impossiblenothing is impossiblenothing is impossiblenothing is impossiblenothing is impossible</div>
                <div class="edit-btn"><button type="button" class="btn btn-primary">编辑资料</button></div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="persoanl-setting">

        <div class="panel panel-default set-notify">
            <div class="panel-heading">
                <h3 class="panel-title">
                    通知设置
                </h3>
            </div>
            <div class="panel-body">

                <div class="control-group">
                    <label class="control-label" for="notification2">是否允许邮件通知</label>
                    <div class="controls">
                        <div class="switch switch-mini">
                            <input type="checkbox" checked />
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="panel panel-default apply-write">
            <div class="panel-heading">
                <h3 class="panel-title">
                    密码修改
                </h3>
            </div>
            <div class="panel-body">

                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label for="firstname" class="col-sm-3 control-label">旧密码</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="firstname"
                                   placeholder="请输入旧密码">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="lastname" class="col-sm-3 control-label">新密码</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="lastname"
                                   placeholder="请输入新密码">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="lastname" class="col-sm-3 control-label">确认密码</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="lastname"
                                   placeholder="请输入确认密码">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default pull-right">修改</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>

    </div>
@endsection

