<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{

    public function login(){
        return view('admin.login');
    }

    public function index(){
        return view('admin.admin');
    }
}
