@extends('layouts.admin-app')

@section('child-css-js')
    <link href="{{ asset('css/admin_editor.css') }}" rel="stylesheet">
    <script src="{{ asset('js/marked.js') }}"></script>
    <script src="{{ asset('js/ace/ace.js') }}"></script>
    <link href="{{ asset('css/markdown.css') }}" rel="stylesheet" >
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


        <form action="#" id="article">

            <div id="article-info">

                <button class="btn btn-default btn-block pull-right" id="article-submit-m" type="submit">保存</button>

                <input type="text" name="title" class="form-control pull-left" id="article-title" placeholder="请输入文章标题">

                <select name="cover" class="form-control pull-left" id="article-cover">
                    <option value="">请选择文章封面</option>
                    <option value="1">这一张</option>
                    <option value="1">这一张</option>
                </select>

                <button class="btn btn-default pull-right" id="article-submit" type="submit">保存</button>

            </div>

            <div id="article-description">

                <input type="text" name="description" class="form-control pull-left" id="description" placeholder="请输入文章描述">

                <input type="text" name="tags" class="form-control pull-left" id="article-tag" placeholder="请输入文章标签，多个请用逗号隔开">

            </div>

            <input type="text" name="article-content" id="article-content" hidden="hidden">

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
            event.preventDefault();
            $('#article-content').val(marked(acen_edit.getValue()));
            validator();
        });
        $('#article-submit').click(function(event){
            event.preventDefault();
            $('#article-content').val(marked(acen_edit.getValue()));
            validator();
        });

        function validator(){

            $('#alert-tip').css('display','block');

            if ($('#article-title').val() == '') {
                $('.sub-tip').text('温馨提示：请输入文章标题');
                return false;
            }
            if ($('#article-cover').val() == '') {
                console.log('is here');
                $('.sub-tip').text('温馨提示：请选择文章封面');
                return false;
            }
            if ($('#description').val() == '') {
                $('.sub-tip').text('温馨提示：请输入文章描述');
                return false;
            }
            if ($('#article-tag').val() == '') {
                $('.sub-tip').text('温馨提示：请输入文章标签');
                return false;
            }

            if ($('#article-content').val() == '') {
                $('.sub-tip').text('温馨提示：请输入文章内容');
                return false;
            }

            $('#alert-tip').css('display','none');

            $('#article').submit();

            return true;

        }
    </script>
@endsection