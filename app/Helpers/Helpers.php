<?php
/**
 * Created by cys.
 * Date: 2017/8/28
 * Time: 20:14
 */

/**
 * @Name error
 * @Created by yuxuewen.
 * @Description 输入错误JSON信息
 * @param $code
 * @return string
 */
function error($code, $nextUrl = ''){
    if (is_array($code)){
        $error_arr = array();
        foreach ($code as $c){
            $error_arr[] = [
                'retCode' => $code,
                'retMsg' => trans('tip.'.$c)
            ];
        }
        return json_encode($error_arr);
    }
    return '{"retCode":"'.$code.'","retMsg":"'.trans('tip.'.$code).'","retUrl":"'.$nextUrl.'"}';
}

/**
 * @Name error_msg
 * @Created by yuxuewen.
 * @Description 自定义错误信息
 * @param $code
 * @param string $custom_msg
 * @return string
 */
function error_msg($custom_msg = '', $nextUrl = '', $code = 1){
    return json_encode(array('retcode' => $code, 'retmsg' => $custom_msg, 'retUrl' => $nextUrl));
}

/**
 * @Name success
 * @Created by yuxuewen.
 * @Description 输出正确接口信息
 * @param null $code
 * @param array $data
 * @return string
 */
function success($code = null, $nextUrl = '', $data = array()){
    if (empty($code))
        return '{"retCode":"0","retMsg":"'.trans('tip.20000').'"}';

    if (empty($data))
        return '{"retCode":"0","sucCode":'.$code.',"retMsg":"'.trans('tip.'.$code).'","retUrl":"'.$nextUrl.'"}';
    else
    {
        return json_encode([
            'retCode' =>  "0",
            'sucCode' => $code,
            'retMsg'  => trans('tip.'.$code),
            'retData' =>  $data,
            'retUrl' =>  $nextUrl
        ]);
    }
}

/**
 * @Name success_data
 * @Created by yuxuewen.
 * @Description 返回默认代码的有数据成功信息
 * @param array $data
 * @return string
 */
function success_data($data = array(), $nextUrl = '')
{
    return json_encode([
        'retCode' =>  "0",
        'retMsg'  =>  trans('tip.20000'),
        'retData' =>  $data,
        'retUrl' =>  $nextUrl
    ]);
}


/**
 * @param $obj
 * @param array $filter 筛选条件,默认为空数组
 * @return string
 */
function page($obj, $filter = array())
{
    $str = '';
    if ($obj->total() > 1) {
        $str .=  '<div class="row"><div class="col-sm-5 text-left"><div style="margin: 25px 10px;" >第'.$obj->currentPage().'/'.$obj->lastPage().'页，共'.$obj->total().'条</div></div>';
        $str .= '<div class="col-sm-7 text-right">'.$obj->appends($filter)->links().'</div></div>';

    }
    return $str;
}

/**
 * @param null $img_path
 * @return string
 * @Description 返回oss的图片路径
 * @author dyl
 */
function img_path($img_path = null){
    return config('oss.img_path') . $img_path;
}


/**
 * @Name to_array
 * @Created by yuxuewen.
 * @Description 将字符串变成数组
 * @param $data
 * @return array
 */
function to_array($data){
    if (!is_array($data)){
        $explode_data = explode(",",$data);
        if (empty($explode_data)){
            return [$data];
        } else {
            return $explode_data;
        }
    }

    return $data;
}


/**
 * @description     去除数组的空值,去除输入框的前后空格
 * @param array $data      数组
 * @return array
 */
function unset_empty_keys(array $data = []){
    if (empty($data)) return [];

    foreach ($data as $k => $v) {
        if (empty($v) && $v != 0 && $v != '0') {
            unset($data[$k]);
            continue;
        }
        if (is_string($v)) $data[$k] = trim($v);
    }

    return $data;
}



/**
 * @description 生成新文件名
 * @author dyl
 * @param $obj      文件对象
 * @return string
 */
function file_upload_name($obj){
    return md5_file($obj->getRealPath()).rand(1,999).'.'.$obj->guessExtension();
}

