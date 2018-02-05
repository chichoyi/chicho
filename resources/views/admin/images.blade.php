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

    </div>
@endsection

@section('fill-script')
<div id="show_img" onclick="$(this).fadeOut('slow');">
    <div id="img_box">
        <img id="is_img" src="" alt="">
    </div>
</div>

<!-- 模态框（Modal） -->
<div class="modal fade" id="modalForImg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">修改图片标题</h4>
            </div>
            <div class="modal-body">
                <form role="form" id="img-form">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" id="img-id" value="">
                    <div class="form-group">
                        <label for="title">图片标题</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="请输入标题">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                <button type="button" class="btn btn-primary" id="submit">提交更改</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<script>

    $(document).ready(function(){
        var ret_el = '';
        $.get(handleUrl('admin/images_list'), '',
            function(data){
                var retData = handlRet(data);
                var StrHtml = '';
                $.each(retData.retData,function(index,item){
                    StrHtml += "<div class='image-item'><div class='img-box'>" +
                        "<img src='http://yinshan.oss-cn-shenzhen.aliyuncs.com/"+item.url +"' alt='"+item.title+"'>" +
                        "</div><div class='img-operate'><a href='#' class='magnifier'><span class='glyphicon glyphicon-zoom-in pull-left operate'>" +
                        "</span></a><a href='#' class='modifyTitle' data-id='"+item.id+"'><span class='glyphicon glyphicon-edit pull-left operate margin-10'>" +
                        "</span></a><a href='#'><span class='glyphicon glyphicon-trash pull-right operate'></span></a></div>" +
                        "<input type='hidden' id='title-"+item.id+"' data-title='"+item.title+"'></div>";
                });
                ret_el = $('.container').append(StrHtml);
                magnifier();
                modifyTitle();

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
        
        function rmImg() {
            
        }
        
        function modifyTitle() {
            $('.modifyTitle').on('click',function () {
                $('#modalForImg').modal('show');
                var imgId = $(this).attr('data-id');
                $('#img-id').val(imgId);
                var imgAlt = $('#title-'+imgId).attr('data-title');
                $('#title').val(imgAlt);
            });

            $('#submit').on('click',function () {
                $('#modalForImg').modal('hide');
                ajaxRequest('admin/modify_title', $('#img-form').serialize(), function () {
                    $('#title-' + $('#img-id').val()).attr('data-title', $('#title').val());
                });
            });

        }


    });



</script>
@endsection