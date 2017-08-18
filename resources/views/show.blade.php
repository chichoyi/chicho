<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>志高意</title>

    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script src="http://apps.bdimg.com/libs/jquery/2.1.1/jquery.js"></script>
    <script src="http://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="http://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet">

    <link href="{{ asset('css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet" media="screen">


</head>
<body>

<div class="container" style="margin-top: 50px;text-align: center;">
    <form action="{{ route('get_data') }}" class="form-horizontal" method="post">
        {{ csrf_field() }}
        <fieldset>
            <legend></legend>

            <div class="control-group" style="margin-top: 50px;">
                <label class="control-label">请选择起止时间</label>
            </div>

            <div class="control-group" style="margin:0 auto;margin-top: 50px;margin-bottom: 150px;width: 50%;">

                <div class="date form_datetime col-sm-6 ">
                    <input type="text" class="form-control" name="start_time" id="start_time" value="" readonly placeholder="开始日期">
                    <span class="add-on"><i class="icon-remove"></i></span>
                    <span class="add-on"><i class="icon-th"></i></span>
                </div>

                <div class="date form_datetime col-sm-6 " >
                    <input type="text" class="form-control" name="end_time" id="end_time" value="" readonly placeholder="结束日期">
                    <span class="add-on"><i class="icon-remove"></i></span>
                    <span class="add-on"><i class="icon-th"></i></span>
                </div>


            </div>

            <div class="control-group" style="margin:0 auto;width: 50%;">
                <label class="control-label"></label>
                <button type="submit" class="btn btn-primary btn-block btn-lg">导出</button>
            </div>

        </fieldset>
    </form>
</div>

</body>

<script type="text/javascript">
    $('#daochu').click(function(){
        alert('ok');
    });

</script>

<script type="text/javascript" src="{{ asset('js/bootstrap-datetimepicker.js') }}" charset="UTF-8"></script>
<script type="text/javascript" src="{{ asset('js/locales/bootstrap-datetimepicker.zh-CN.js') }}" charset="UTF-8"></script>

<script type="text/javascript">
    $('#start_time').datetimepicker({
        language:  'zh-CN',
        //weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        minView: 2,
        startView: 2,
        forceParse: 0,
        showMeridian: 1,
        format: 'yyyy-mm-dd 00:00:00'
    }).on("changeDate",function(){
        $("#end_time").datetimepicker("setStartDate",$("#start_time").val())
    });
    $('#end_time').datetimepicker({
        language:  'zh-CN',
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        minView: 2,
        startView: 2,
        forceParse: 0,
        showMeridian: 1,
        format: 'yyyy-mm-dd 00:00:00'
    }).on("changeDate",function(){
        $("#start_time").datetimepicker("setEndDate",$("#end_time").val())
    });
</script>


</html>