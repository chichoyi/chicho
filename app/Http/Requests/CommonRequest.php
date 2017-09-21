<?php

namespace App\Http\Requests;

trait CommonRequest
{
    /*
     * 获取当前访问的方法
     * @author chicho
     * */
    public function getAction(){
        $pathInfo = $this->getPathInfo();
        return substr(strrchr($pathInfo, "/"), 1);
    }

}
