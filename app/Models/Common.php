<?php

namespace App\Models;


trait Common
{

    public static function add(array $values){
        if ($result = static::create($values)){
            return $result;
        } else {
            return false;
        }
    }

    public static function getByFeild(array $where = []){
        if ($result = static::where($where)->get()){
            return $result;
        }else{
            return false;
        }
    }

}
