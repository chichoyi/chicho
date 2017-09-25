<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ImagesController extends Controller
{

    public function showUpload(){
        return view('admin.upload_image');
    }

    public function images(){
        return view('admin.images');
    }

    public function upload(Request $request){
        dd($request->all());
    }

}
