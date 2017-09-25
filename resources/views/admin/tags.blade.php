@extends('layouts.admin-app')

@section('child-css-js')
    <link href="{{ asset('css/admin_common.css') }}" rel="stylesheet">
@endsection

@section('breadcrumb')
    <ol class="breadcrumb margin-bottom-0">
        <li><a href="#">首页</a></li>
        <li><a href="#">标签管理</a></li>
        {{--<li class="active">十一月</li>--}}
    </ol>
@endsection

@section('content')
    <div class="table-responsive" style="padding: 15px;">
        <table class="table table-striped">
            <caption><button type="button" class="btn btn-default btn-xs">添加标签</button></caption>
            <thead>
            <tr>
                <th>标签</th>
                <th>描述</th>
                <th>状态</th>
                <th>操作</th></tr>
            </thead>
            <tbody>
            <tr>
                <td>docker</td>
                <td>docker配置</td>
                <td>未使用</td>
                <td>
                    <button type="button" class="btn btn-primary btn-xs">编辑</button>
                    <button type="button" class="btn btn-info btn-xs">使用</button>
                </td></tr>
            <tr>
                <td>docker-compose</td>
                <td>docker配置</td>
                <td>使用中</td>
                <td>
                    <button type="button" class="btn btn-primary btn-xs">编辑</button>
                    <button type="button" class="btn btn-warning btn-xs">取消使用</button>
                </td></tr>
            <tr>
                <td>compose</td>
                <td>docker配置</td>
                <td>使用中</td>
                <td>
                    <button type="button" class="btn btn-primary btn-xs">编辑</button>
                    <button type="button" class="btn btn-warning btn-xs">取消使用</button>
                </td></tr>
            <tr>
                <td>docker</td>
                <td>docker配置</td>
                <td>未使用</td>
                <td>
                    <button type="button" class="btn btn-primary btn-xs">编辑</button>
                    <button type="button" class="btn btn-info btn-xs">使用</button>
                </td></tr>
            </tbody>
        </table>
    </div>

    <div class="pages">
        <ul class="pagination">
            <li><a href="#">&laquo;</a></li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">&raquo;</a></li>
        </ul>
    </div>
@endsection