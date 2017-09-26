@extends('layouts.admin-app')

@section('child-css-js')
    <link href="{{ asset('css/bootstrap-fileinput.css') }}" rel="stylesheet">
@endsection

@section('breadcrumb')
    <ol class="breadcrumb margin-bottom-0">
        <li><a href="#">首页</a></li>
        <li><a href="#">上传图片</a></li>
        {{--<li class="active">十一月</li>--}}
    </ol>
@endsection

@section('content')
    <div class="container" style="width: auto;">
        <div class="page-header">
            <h3>图片上传</h3>
            <form action="{{ url('admin/upload_image') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group" id="uploadForm" enctype="multipart/form-data">
                    <div class="h4">图片预览</div>
                    <div class="fileinput fileinput-new" data-provides="fileinput" id="exampleInputUpload">
                        <div class="fileinput-new thumbnail" style="width: 200px;height: auto;max-height:150px;">
                            <img id="picImg" style="width: 100%;height: auto;max-height: 140px;" src="{{ asset('img/noimage.png') }}" alt="">
                        </div>
                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                        <div>
	                        <span class="btn btn-primary btn-file">
	                            <span class="fileinput-new">选择文件</span>
	                            <span class="fileinput-exists">换一张</span>
	                            <input type="file" name="cover" id="picID" accept="image/gif,image/jpeg,image/x-png">
	                        </span>
                            <a href="javascript:;" class="btn btn-warning fileinput-exists" data-dismiss="fileinput">移除</a>
                        </div>
                    </div>
                </div>
                @if (session('error_tip'))
                    <div style="color: red;margin-bottom: 30px;">
                        {{ session('error_tip') }}
                    </div>
                @endif
                <button type="submit" id="uploadSubmi1t" class="btn btn-info">提交</button>
            </form>
        </div>
    </div>
    <script src="{{ asset('js/bootstrap-fileinput.js') }}"></script>
    <script type="text/javascript">
        $(function () {
            //比较简洁，细节可自行完善
            $('#uploadSubmit').click(function () {
                var data = new FormData($('#uploadForm'));
                console.log(data);
                /*$.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: '{{ url('admin/upload_image') }}',
                    type: 'POST',
                    data: data,
                    async: false,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function (data) {
                        console.log(data);
                        if(data.status){
                            console.log('upload success');
                        }else{
                            console.log(data.message);
                        }
                    },
                    error: function (data) {
                        console.log(data.status);
                    }
                });*/
            });

        })
    </script>
@endsection