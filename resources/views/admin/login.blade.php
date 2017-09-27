<!DOCTYPE html>
<!-- saved from url=(0067)http://www.17sucai.com/preview/668095/2017-07-19/perfect/index.html -->
<html lang="en" class="no-js"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login</title>
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" >
    <link rel="stylesheet" type="text/css" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/demo.css') }}">
    <!--必要样式-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/component.css') }}">
    <!--[if IE]>
    <script src="js/html5.js"></script>
    <![endif]-->
</head>
<body>
{{-- 提示框 --}}
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width: 200px;text-align: center;">
        <div class="modal-content">
            <div class="modal-body" id="show_tip">按下 ESC 按钮退出。</div>
        </div>
    </div>
</div>

<div class="demo-1">
    <div class="content">
        <div id="large-header" class="large-header" style="height: 696px;">
            <canvas id="demo-canvas" width="1600" height="696"></canvas>
            <div class="logo_box">
                <h3>chicho-博客后台管理</h3>
                <form action="{{ url('admin/login') }}" id="login-form" method="post">
                    {{ csrf_field() }}
                    <div class="input_outer">
                        <span class="u_user"></span>
                        <input name="name" class="text" style="color: #FFFFFF !important"
                               value="{{ old('name') }}@if (session('old_name')){{ session('old_name') }}@endif"
                               type="text" placeholder="请输入用户名">
                    </div>
                    <div class="input_outer">
                        <span class="us_uer"></span>
                        <input name="password" class="text" style="color: #FFFFFF !important; position:absolute; z-index:100;" value="" type="password" placeholder="请输入密码">
                    </div>
                    @if ($errors->has('name') || $errors->has('password') )
                        <div style="width: 100%;color: red;margin-bottom: 30px;text-align: center;">
                            {{ $errors->first('name') }}
                            {{ $errors->first('password') }}
                        </div>
                    @endif
                    @if (session('error_tip'))
                        <div style="width: 100%;color: red;margin-bottom: 30px;text-align: center;">
                            {{ session('error_tip') }}
                        </div>
                    @endif

                    <div class="mb2">
                        <a class="act-but submit" id="sb-bt"   style="color: #FFFFFF">登录</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div><!-- /container -->
<script src="{{ asset('js/TweenLite.min.js') }}"></script>
<script src="{{ asset('js/EasePack.min.js') }}"></script>
<script src="{{ asset('js/rAF.js') }}"></script>
<script src="{{ asset('js/demo-1.js') }}"></script>

<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="{{ asset('js/common.js') }}"></script>

<script>
    $('#sb-bt').click(function () {
        $(this).text('登录中...');
        var url = 'admin/login';
        var data = $("#login-form").serialize();
        ajaxRequest(url,data);
        $('#sb-bt').text('登录');

    });

</script>

</body></html>