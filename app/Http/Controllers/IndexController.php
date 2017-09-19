<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{

    /**
     * @description：首页
     * @author：chicho
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        return view('chicho');
    }

    /**
     * @description：全部文章
     * @author：chicho
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function articles(){
        return view('articles');
    }

    /**
     * @description：指定id的文章
     * @author：chicho
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function info($id){
        return view('article');
    }

    /**
     * @description：打赏
     * @author：chicho
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function donate(){
        return view('donate');
    }

}
