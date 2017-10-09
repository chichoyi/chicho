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
                <img src="http://www.17sucai.com/preview/1/2015-10-16/ImageGridEffects/img/original/6.jpg" alt="">
            </div>
            <div class="img-operate">
                <a href="#" class="magnifier"><span class="glyphicon glyphicon-zoom-in pull-left operate"></span></a>
                <a href="#"><span class="glyphicon glyphicon-trash pull-right operate"></span></a>
            </div>
        </div>
        <div class="image-item">
            <div class="img-box">
                <img src="http://www.17sucai.com/preview/1/2015-10-16/ImageGridEffects/img/original/6.jpg" alt="">
            </div>
            <div class="img-operate">
                <a href="#" class="magnifier"><span class="glyphicon glyphicon-zoom-in pull-left operate"></span></a>
                <a href="#"><span class="glyphicon glyphicon-trash pull-right operate"></span></a>
            </div>
        </div>
        
    </div>

@endsection

@section('fill-script')
<div id="show_img" onclick="$(this).fadeOut('slow');">
    <div id="img_box">
        <img id="is_img" src="" alt="">
    </div>
</div>

<script>

    $(document).ready(function(){
        var ret_el = '';
        $.get(handleUrl('admin/images_list'), '',
            function(data){
                var retData = handlRet(data);
                var StrHtml = '';
                $.each(retData.retData,function(index,item){
                    StrHtml += "<div class='image-item'><div class='img-box'>" +
                        "<img src='http://yinshan.oss-cn-shenzhen.aliyuncs.com/"+item.url +"' alt=''>" +
                        "</div><div class='img-operate'><a href='#' class='magnifier'><span class='glyphicon glyphicon-zoom-in pull-left operate'>" +
                        "</span></a><a href='#'><span class='glyphicon glyphicon-trash pull-right operate'></span></a></div></div>";
                });
                ret_el = $('.container').append(StrHtml);
                magnifier();

                if (StrHtml == ''){
                    errorTip("没有图片");
                    $('.container').append("没有图片");
                }
            }
        );

        function magnifier() {
            $('.magnifier').on("click", function(){
                var this_url = $(this).parent().parent().children().first().children().attr('src');
                $('#is_img').attr("src",this_url);
                $('body').attr('position','relative');
                $('#show_img').css('width',document.documentElement.clientWidth +'px');
                $('#show_img').css('height',document.documentElement.clientHeight+'px');
                $('#img_box').css('line-height',document.documentElement.clientHeight+'px');
                $('#show_img').fadeIn("slow");
            });
        }

    });



</script>
@endsection