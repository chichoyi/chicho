<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TagsController extends Controller
{

    public function tags(){
        return view('admin.tags');
    }

    public function showEdit(){
        return view('admin.edit_tag');
    }

}
