/**
 * Created by Administrator on 2017/9/27.
 */

function ajaxRequest(url,data,method) {
    if (url == ''){
        alert("请求地址不得为空，请检查");
        return false;
    }
    if (!isJSON(data)){
        alert("请传json对象，请检查");
        return false;
    }
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: method ? method : 'POST',
        url: url,
        data: data,
        success: function (ret_data) {
            ret_data = eval('('+ ret_data +')');
            if (ret_data['retCode'] == 0){
                ccTip(ret_data['retMsg'], ret_data['retUrl']);
            }else{
                ccTip(ret_data['retMsg'], ret_data['retUrl']);
            }
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

function ccTip(msg, myUrl) {
    $('#show_tip').text(msg);

    $('#myModal').modal('show');

    window.setTimeout(function(){
        $('#myModal').modal('hide');
        if (myUrl !== undefined){
            $('#myModal').on('hidden.bs.modal', function () {
                window.location.href="http://"+document.domain+"/"+myUrl;
            });
        }
    },3000);

}

function errorTip(msg){
    $('#show_tip').text(msg);

    $('#myModal').modal('show');

    window.setTimeout(function(){
        $('#myModal').modal('hide');
    },3000);
}
