<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Maatwebsite\Excel\Facades\Excel;

class SpiderController extends Controller
{

    public function getJinData(Request $request){
        //时间处理
        $time_arr = $this->dealTime($request->start_time,$request->end_time);
        //处理请求和导出数据
        $this->dealmanyRequest($time_arr);
    }

    //根据起止时间解析时间获取数据
    protected function dealTime($start_time,$end_time){
        //只有一天
        if ($start_time == $end_time){
            return [$this->changeTime($start_time)];
        }

        $times = (strtotime($end_time) - strtotime($start_time))/86400;

        //只有两天
        if ($times == 1 ){
            return [$this->changeTime($start_time),$this->changeTime($end_time)];
        }

        //大于等于三天
        for ($i = 0;$i <= $times;$i++){
            $add_time = strtotime($start_time) + 86400 * $i;
            $r_dates[] = date('Y/md',$add_time);
        }

        return $r_dates;
    }

    //时间转换处理
    protected  function changeTime($time){
        return date('Y/md',strtotime($time));
    }

    //请求处理
    protected function dealmanyRequest(array $time_arr){
        $iwannaget[0] = ['时间','国/区','指标名称','重要性','前值','预测值','公布值','MT4时间'];

        foreach ($time_arr as $time){
            $client = new Client();
            $response = $client->request('GET', 'https://rili.jin10.com/datas/'.$time.'/economics.json');
            $json_data = $response->getBody();
            $data_arr = json_decode($json_data);
            foreach ($data_arr as $data){
                $MT4_time = date('Y-m-d H:i:s',strtotime($data->publictime)-7*3600);
                $iwannaget[] = [$data->publictime,$data->country,$data->title,$data->star,$data->previous,$data->consensus,$data->actual,$MT4_time];
            }
        }

        //命名
        if (count($time_arr) == 1){
            $title = $time_arr[0];
        }else{
            $title = $time_arr[0].'--'.end($time_arr);
        }

        Excel::create($title,function ($excel)use($iwannaget){
            $excel->sheet('sheet1',function ($sheet)use($iwannaget){
                $sheet->rows($iwannaget);
            });
        })->export('xls');
    }



}
