@extends('layouts.admin-app')

@section('child-css-js')
    <style>
        .content
        {
            width: 50%;
            padding: 15px;
            margin: 0 auto;
        }
        @media (max-width:768px ) {
            .content
            {
                width: 100%;
            }
        }
    </style>
@endsection

@section('breadcrumb')
    <ol class="breadcrumb margin-bottom-0">
        <li><a href="#">首页</a></li>
        <li><a href="#">编辑标签</a></li>
        {{--<li class="active">十一月</li>--}}
    </ol>
@endsection

@section('content')
    <div class="content">
        <form role="form">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">标签</label>
                <input type="text" class="form-control" placeholder="文本输入">
            </div>
            <div class="form-group">
                <label for="name">描述</label>
                <textarea class="form-control" rows="2"></textarea>
            </div>
            <div class="form-group">
                <label for="optionsRadios">
                    状态
                </label>
                <input type="checkbox" name="optionsRadios" value="option1" checked> 是否使用
            </div>
            <button type="button" class="btn btn-default btn-sm btn-block">添加或者修改</button>
        </form>
    </div>
@endsection