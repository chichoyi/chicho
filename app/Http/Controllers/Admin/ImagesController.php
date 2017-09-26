<?php

namespace App\Http\Controllers\Admin;

use App\Models\Images;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use OSS\OssClient;

class ImagesController extends Controller
{

    public function showUpload(){
        return view('admin.upload_image');
    }

    public function images(){
        return view('admin.images');
    }

    public function upload(Request $request){
        $img = $request->file('cover');
        $format = explode('/', config('oss.oss_path_format'));
        $store_path = '';
        foreach ($format as $f){
            $store_path .= '/'.date($f, $_SERVER['REQUEST_TIME']);
        }
        $file_name = md5_file($img->getRealPath()).rand(1,999).'.'.$img->guessExtension();
        $response = $img->storeAs($store_path, $file_name);
        if ($response){
            $result = Images::add([
                'url'=>$response
            ]);
            if ($result){
                //成功
                return redirect('admin/images');
            }
        }
        //失败
        return redirect('admin/upload_image')
            ->with('error_tip','上传失败');
    }

}
