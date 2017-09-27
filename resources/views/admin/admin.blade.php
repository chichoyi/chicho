@extends('layouts.admin-app')

@section('breadcrumb')
    <ol class="breadcrumb margin-bottom-0">
    <li><a href="#">首页</a></li>
    <!-- <li><a href="#">2013</a></li>
    <li class="active">十一月</li> -->
    </ol>
@endsection

@section('content')
    <div id="content">
        <button type="button" id="test">点击ajax测试</button>
    </div>
    <script>
        $('#test').click(function () {
            var data = {
                phone:"1382343090",
                name:"chicho"
            };
            var url = 'admin/ajax_ret';
            ajaxRequest(url,data);

            //url    admin/ajax_ret   post
        });
    </script>
@endsection