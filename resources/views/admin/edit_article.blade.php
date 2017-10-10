@extends('layouts.admin-app')

@section('child-css-js')
    <link href="{{ asset('css/admin_editor.css') }}" rel="stylesheet">
    <script src="{{ asset('js/marked.js') }}"></script>
    <script src="{{ asset('js/ace/ace.js') }}"></script>
    <link href="{{ asset('css/markdown.css') }}" rel="stylesheet" >
    <script src="{{ asset('js/bootstrap-select.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/bootstrap-select.min.css') }}">
@endsection

@section('breadcrumb')
    <ol class="breadcrumb margin-bottom-0">
        <li><a href="#">首页</a></li>
        <li><a href="#">编辑文章</a></li>
    </ol>
@endsection

@section('content')
    <div id="content">

        <div class="alert alert-warning margin-bottom-0" id="alert-tip" style="display: none;">
            <!-- <a href="#" class="close" data-dismiss="alert">
                &times;
            </a> -->
            <strong class="sub-tip">温馨提示: 请输入文章标题</strong>
        </div>
        @if (count($errors) > 0)
            <div class="alert alert-warning margin-bottom-0" id="alert-tip">
                <strong class="sub-tip">
                    温馨提示:{{ $errors->first() }}
                </strong>
            </div>
        @endif


        <form action="{{ url('admin/article') }}" method="post" enctype="multipart/form-data" id="article">
            {{ csrf_field() }}
            <div id="article-info">

                <button class="btn btn-default btn-block pull-right" id="article-submit-m" type="button">保存</button>

                <input type="text" name="title" class="form-control pull-left" id="article-title" placeholder="请输入文章标题">

                <select name="cover" class="form-control pull-left" id="article-cover">
                    <option value="">请选择文章封面</option>
                    <option value="https://ss1.bdstatic.com/70cFuXSh_Q1YnxGkpoWK1HF6hhy/it/u=1156197173,470200848&fm=27&gp=0.jpg">这一张</option>
                    <option value="https://ss1.bdstatic.com/70cFuXSh_Q1YnxGkpoWK1HF6hhy/it/u=1156197173,470200848&fm=27&gp=0.jpg">这一张</option>
                </select>

                <button class="btn btn-default pull-right" id="article-submit" type="button">保存</button>

            </div>

            <div id="article-description">

                <input type="text" name="description" class="form-control pull-left" id="description" placeholder="请输入文章描述">

                <div class="col-lg-10 pull-left" id="article-tag" style="padding: 0;">
                    <select id="maxOption5" name="tags[]" class="selectpicker show-menu-arrow form-control" multiple data-max-options="5" title="请选择标签">

                    </select>
                </div>

            </div>

            <input type="text" name="content" id="article-content" hidden="hidden">

            <div id='editor-column' class='pull-left'>
                <div id='panel-editor'>
                    <!--编辑区-->
                    <div class="editor-content" id="mdeditor" ></div>

                </div>
            </div>


            <div id='preview-column' class='pull-right'>
                <div id='panel-preview'>
                    <!--显示区-->
                    <div id="preview" class="markdown-body"></div>

                </div>
            </div>

        </form>
    </div>
@endsection

@section('fill-script')
    <script>
        var acen_edit = ace.edit('mdeditor');
        acen_edit.setTheme('ace/theme/chrome');
        acen_edit.getSession().setMode('ace/mode/markdown');
        acen_edit.renderer.setShowPrintMargin(false);
        $("#mdeditor").keyup(function() {
            $("#preview").html(marked(acen_edit.getValue()));
        });

        $('#article-submit-m').click(function(event){
            if (validator()){
                ajaxRequest('admin/article', $('#article').serialize());
            }
            return false;

        });
        $('#article-submit').click(function(event){
            if (validator()){
                ajaxRequest('admin/article', $('#article').serialize());
            }
            return false;
        });

        function validator(){
            event.preventDefault();
            $('#article-content').val(marked(acen_edit.getValue()));


            $('#alert-tip').css('display','block');

            if ($('#article-title').val() == '') {
                $('.sub-tip').text('温馨提示：请输入文章标题');
                return false;
            }
            if ($('#article-cover').val() == '') {
                $('.sub-tip').text('温馨提示：请选择文章封面');
                return false;
            }
            if ($('#description').val() == '') {
                $('.sub-tip').text('温馨提示：请输入文章描述');
                return false;
            }
            if ($('#maxOption5').val() == '') {
                $('.sub-tip').text('温馨提示：请输入文章标签');
                return false;
            }

            if ($('#article-content').val() == '') {
                $('.sub-tip').text('温馨提示：请输入文章内容');
                return false;
            }

            $('#alert-tip').css('display','none');


            return true;

        }


        $(document).ready(function(){
            //for covers
            customAjaxRequest('admin/images_list', '', function (retData) {
                var StrHtml = '';
                $.each(retData.retData,function(index,item){
                    StrHtml += "<option value='"+item.id +"'>"+item.title+"</option>";
                });
                $('#article-cover').append(StrHtml);
            }, 'GET');

            //for tags
            customAjaxRequest('admin/tags_list', '', function (retData) {
                var StrHtml = '';
                var arr = new Array();
                $.each(retData.retData,function(index,item){
                    StrHtml += "<option value='"+item.id +"'>"+item.tag+"</option>";
                    arr[index] = item.tag;
                });

                $('#maxOption5').append(StrHtml);
                $('.selectpicker').selectpicker('val', arr);
                $('.selectpicker').selectpicker('refresh');

            }, 'GET');

        })
    </script>
@endsection