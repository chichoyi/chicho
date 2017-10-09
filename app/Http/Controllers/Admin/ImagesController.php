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

    public function imagesList(){
        return success_data(Images::getByFeild());
    }

    public function upload(Request $request){
        $img = $request->file('cover');
        $format = explode('/', config('oss.oss_path_format'));
        $store_path = '';
        foreach ($format as $f){
            $store_path .= '/'.date($f, $_SERVER['REQUEST_TIME']);
        }
        $response = $img->storeAs($store_path, file_upload_name($img));
        if ($response){
            $result = Images::add([
                'url'=>$response
            ]);
            if ($result){
                return success(20007,"admin/images");
            }
        }
        return error(5007);
    }

}
