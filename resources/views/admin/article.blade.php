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
                <th>操作</th></tr>
            </thead>
            <tbody>

            @if ($articles)
                @foreach ($articles as $article)
                    <tr>
                        <td>
                            @if ($article->article_tags)
                                @foreach ($article->article_tags as $article_tag)
                                    @if ($article_tag)
                                        {{ $article_tag->tags->tag }}
                                    @endif
                                    @if (!$loop->last)
                                        ,
                                    @endif
                                @endforeach
                            @endif
                        </td>
                        <td><a href="#">{{ $article->title }}</a></td>
                        <td>
                            <button type="button" class="btn btn-info btn-xs publish" data-id="{{ $article->id }}" data-v="{{ $article->is_publish }}">
                                @if ($article->is_publish == 0)
                                    发布
                                @else
                                    取消发布
                                @endif
                            </button>
                        </td>
                    </tr>
                @endforeach
            @endif

            </tbody>
        </table>
    </div>



    <div class="pages">
        {{ $articles->links() }}
    </div>
@endsection

@section('fill-script')
    <script>
        $('.publish').click(function(){
            var optThis = $(this);
            var is_publish = 1;
            var show = '取消发布';
            var data_v = 1;
            if($(this).attr("data-v") == 1){
                is_publish = 0;
                data_v = 0;
                show = '发布';
            }
            ajaxRequest('admin/is_publish/' + $(this).attr('data-id'), {is_publish:is_publish}, function(){
                optThis.html(show);
                optThis.attr("data-v", data_v);
            });
        });

    </script>
@endsection