/**
 * Created by Administrator on 2017/9/27.
 */


function ajaxRequest(url, data, succuss_cmd, error_cmd, method) {
    if (url == ''){
        alert("请求地址不得为空，请检查");
        return false;
    }
    /*if (!isJSON(data)){
        alert("请传json对象，请检查");
        return false;
    }*/
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: method ? method : 'POST',
        url: "http://"+document.domain+"/"+url,
        data: data,
        success: function (ret_data) {
            ret_data = eval('('+ ret_data +')');
            if (ret_data['retCode'] == 0){
                ccTip(ret_data['retMsg'], ret_data['retUrl']);
            }else{
                ccTip(ret_data['retMsg'], ret_data['retUrl']);
            }
            if(succuss_cmd) (succuss_cmd)();
        } ,
        error:function (xhr) {
            var response = xhr.responseText;
            var retObject = eval('('+ response +')');

            var error_msg = new Array();
            var j = 0;
            for (var i in retObject)
            {
                error_msg[j] = retObject[i][0];
                j++;
            }

            errorTip(error_msg[0]);

            if(error_cmd) (error_cmd)();

        }
    });
}


//自定义ajax返回
function customAjaxRequest(url, data, succuss_cmd, method, error_cmd) {
    if (url == ''){
        alert("请求地址不得为空，请检查");
        return false;
    }
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: method ? method : 'POST',
        url: "http://"+document.domain+"/"+url,
        data: data,
        success: function (ret_data) {
            ret_data = eval('('+ ret_data +')');
            if(succuss_cmd) (succuss_cmd)(ret_data);
        } ,
        error:function (xhr) {
            if(error_cmd){
                (error_cmd)(xhr);
            }else{
                errorTip("请求失败");
            }
        }
    });
}

//判断是不是json字符串
function isJSON(str) {
    str = JSON.stringify(str);
    if (typeof str == 'string') {
        try {
            var obj=JSON.parse(str);
            if(str.indexOf('{')>-1){
                return true;
            }else{
                return false;
            }

        } catch(e) {
            console.log(e);
            return false;
        }
    }
    return false;
}

//提示
function ccTip(msg, myUrl) {
    $('#show_tip').text(msg);
    $('#myModal').modal('show');

    if (myUrl !== undefined && myUrl !== ''){
        $('#myModal').on('hidden.bs.modal', function () {
            window.location.href="http://"+document.domain+"/"+myUrl;
        });
    }

    window.setTimeout(function(){
        $('#myModal').modal('hide');
        if (myUrl !== undefined && myUrl !== ''){
            $('#myModal').on('hidden.bs.modal', function () {
                window.location.href="http://"+document.domain+"/"+myUrl;
            });
        }
    },3000);

}

//错误提示
function errorTip(msg){
    $('#show_tip').text(msg);

    $('#myModal').modal('show');

    window.setTimeout(function(){
        $('#myModal').modal('hide');
    },3000);
}

//js 时间戳转换成几分钟前，几小时前，几天前
function formatMsgTime (timespan){

    var dateTime = new Date(timespan);

    var year = dateTime.getFullYear();
    var month = dateTime.getMonth() + 1;
    var day = dateTime.getDate();
    var hour = dateTime.getHours();
    var minute = dateTime.getMinutes();
    var second = dateTime.getSeconds();
    var now = new Date();
    var now_new = Date.parse(now.toDateString());  //typescript转换写法

    var milliseconds = 0;
    var timeSpanStr;

    milliseconds = now_new - timespan;

    if (milliseconds <= 1000 * 60 * 1) {
        timeSpanStr = '刚刚';
    }
    else if (1000 * 60 * 1 < milliseconds && milliseconds <= 1000 * 60 * 60) {
        timeSpanStr = Math.round((milliseconds / (1000 * 60))) + '分钟前';
    }
    else if (1000 * 60 * 60 * 1 < milliseconds && milliseconds <= 1000 * 60 * 60 * 24) {
        timeSpanStr = Math.round(milliseconds / (1000 * 60 * 60)) + '小时前';
    }
    else if (1000 * 60 * 60 * 24 < milliseconds && milliseconds <= 1000 * 60 * 60 * 24 * 15) {
        timeSpanStr = Math.round(milliseconds / (1000 * 60 * 60 * 24)) + '天前';
    }
    else if (milliseconds > 1000 * 60 * 60 * 24 * 15 && year == now.getFullYear()) {
        timeSpanStr = month + '-' + day + ' ' + hour + ':' + minute;
    } else {
        timeSpanStr = year + '-' + month + '-' + day + ' ' + hour + ':' + minute;
    }
    return timeSpanStr;
};

//处理url
function handleUrl(url){
    return "http://"+document.domain+"/"+url;
}

function handlRet(ret_data) {
    return eval('('+ ret_data +')');
}
