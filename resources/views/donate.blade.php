 @extends('layouts.chicho-app')

 @section('child-css')
     <link href="{{ asset('css/donate.css') }}" rel="stylesheet">
 @endsection

 @section('banner')
     <div id="banner">
         <div id="motto">
             为知识付费<br/>鼓励作者创作更多文章
             <h6>http://yinshan.me</h6>
         </div>
     </div>
 @endsection

 @section('content')
     <div id="donate">

         <img style="width: 250px;" src="./img/wechatpay.png" alt="微信支付">

         <img style="width: 250px;" src="./img/alipay.jpg" alt="支付宝支付">

     </div>
 @endsection


