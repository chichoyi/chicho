<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AdminLoginPost;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index(){
        return view('admin.admin');
    }

    public function ajaxRet(AdminLoginPost $request){
        //dd($request->all());
        return success(20000);
        //return error(50000);
    }
}
