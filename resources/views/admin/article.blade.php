@extends('layouts.admin-app')

@section('child-css-js')
    <link href="{{ asset('css/admin_common.css') }}" rel="stylesheet">
@endsection

@section('breadcrumb')
    <ol class="breadcrumb margin-bottom-0">
        <li><a href="#">首页</a></li>
        <li><a href="#">文章管理</a></li>
        {{--<li class="active">十一月</li>--}}
    </ol>
@endsection

@section('content')
    <div class="table-responsive">
        <table class="table table-striped">
            <!-- <caption>我的文章</caption> -->
            <thead>
            <tr>
                <th>标签</th>
                <th>文章标题</th>
                <th>状态</th>
                <th>操作</th></tr>
            </thead>
            <tbody>
            <tr>
                <td>docker</td>
                <td><a href="#">docker配置</a></td>
                <td>未发布</td>
                <td>
                    <button type="button" class="btn btn-info btn-xs">发布</button>
                </td></tr>
            <tr>
                <td>docker-compose</td>
                <td><a href="#">docker配置</a></td>
                <td>已发布</td>
                <td>
                    <button type="button" class="btn btn-warning btn-xs">取消发布</button>
                </td></tr>
            <tr>
                <td>compose</td>
                <td><a href="#">docker配置</a></td>
                <td>已发布</td>
                <td>
                    <button type="button" class="btn btn-warning btn-xs">取消发布</button>
                </td></tr>
            <tr>
                <td>docker</td>
                <td><a href="#">docker配置</a></td>
                <td>未发布</td>
                <td>
                    <button type="button" class="btn btn-info btn-xs">发布</button>
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