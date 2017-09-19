<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function index(){
        return view('admin.article');
    }

    public function edit(){
        return view('admin.edit_article');
    }
}
