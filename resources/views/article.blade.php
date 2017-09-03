<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>blog</title>
    <link href="{{ asset('css/amazeui.min.css') }}" rel="stylesheet" >
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" >
    <link href="{{ asset('css/common.css') }}" rel="stylesheet">
    <link href="{{ asset('css/article.css') }}" rel="stylesheet">
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
</head>
<body>

<div id="container">

    <!-- pc header nav-->
    <div id="blog-header">
        <div id="blog-nav">
            <div id="left-nav">
                <div class="item-nav"><a href="#">首页</a></div>
                <div class="item-nav"><a href="#">文章</a></div>
                <div class="item-nav"><a href="#">标签</a></div>
                <div class="item-nav"><a href="#">分享</a></div>
            </div>
            <div id="right-nav">
                <div class="item-nav"><a href="#">注册</a></div>
                <div class="item-nav"><a href="#">登录</a></div>
                <div class="search"><input type="text" placeholder="search"></div>
            </div>
        </div>
    </div>

    <!-- mobile nav -->
    <nav class="navbar navbar-default" id="mobile-nav" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header" id="mobile-header">
                <button id="cc-button-nav" type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target="#chicho-navbar-collapse">
                    <span class="icon-bar" style="background-color: #fff;"></span>
                    <span class="icon-bar" style="background-color: #fff;"></span>
                    <span class="icon-bar" style="background-color: #fff;"></span>
                </button>
                <a class="navbar-brand" style="color: #fff;" href="#">
                    <span class="glyphicon glyphicon-chevron-left" style="font-size: 10px;"></span>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="chicho-navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="#" style="color: #fff;">首页</a></li>
                    <li><a href="#" style="color: #fff;">文章</a></li>
                    <li><a href="#" style="color: #fff;">标签 </a></li>
                    <li><a href="#" style="color: #fff;">分享 </a></li>
                    <li><a href="#" style="color: #fff;">登录 </a></li>
                    <li><a href="#" style="color: #fff;">注册 </a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- mobile header -->
    <div id="cc-mobile-header">
        <h3>基于 Weui.js 的地区选择器 weui-distpicker</h3>
        <h4>基于 Weui.js 的地区选择器 weui-distpicker基于 Weui.js 的地区选择器 weui-distpicker</h4>
        <div class="art-info">
            <span class="glyphicon glyphicon-user"></span>   chicho  ,
            <span class="glyphicon glyphicon-time"></span>   2天前  ,
            <span class="glyphicon glyphicon-tag"></span>   composer , vue , laravel
        </div>
    </div>

    <!-- article content start -->
    <div id="article-content">

        <p class="text-center">
            <img src="https://pigjian.com/images/weui-distpicker.png" alt="Powered By Jiajian Chan" width="160">
        </p>
        <p><code>Weui - Distpicker</code> 是一个 <a href="http://github.com/jcc/weui-distpicker">V - Distpicker</a> 的延伸版本，一个基于 <code>Weui.js</code> 简单、易用、灵活的 <code>Vue</code> 组件。</p>
        <p><a href="https://github.com/weui/weui.js">weui.js</a> 是一个轻量的 <code>Javascript</code> UI 框架，当然这个 <code>UI</code>  只针对于移动端。</p>
        <blockquote>
            <p>为何有了 v-distpicker，造这轮子？</p>
            <p>有更好的 UI 支持，<code>Weui - Distpicker</code> 支持返回地区名字以及地区代码。</p>
            <p>当然下 <code>V - Distpicker</code> 的下一个版本也会支持地区代码的返回。</p>
        </blockquote>
        <ul>
            <li>网站：<a href="http://weui-distpicker.iline.co">http://weui-distpicker.iline.co</a></li>
            <li>源码：<a href="https://github.com/jcc/weui-distpicker">https://github.com/jcc/weui-distpicker</a></li>
        </ul>
        <p>好了，话不多说，下面来了解一下 <code>weui-distpicker</code>，用法基本跟 <code>v-distpicker</code> 一样，但要注意事件方法有点区别的哦。</p>
        <h1 id="-">安装</h1>
        <p>使用 npm 安装：</p>
        <pre><code class="lang-javascript hljs">npm install weui-distpicker --save
		</code></pre>
        <p>使用 <code>yarn</code> 安装</p>
        <pre><code class="lang-javascript hljs">yarn add weui-distpicker --save
		</code></pre>
        <h1 id="-">使用</h1>
        <h3 id="-">注册组件</h3>
        <p><strong>注册全局组件</strong></p>
        <pre><code class="lang-javascript hljs"><span class="hljs-keyword">import</span> WeuiDistpicker <span class="hljs-keyword">from</span> <span class="hljs-string">'weui-distpicker'</span>

		Vue.component(<span class="hljs-string">'weui-distpicker'</span>, WeuiDistpicker);
		</code></pre>
        <p><strong>注册组件</strong></p>
        <pre><code class="lang-javascript hljs"><span class="hljs-keyword">import</span> WeuiDistpicker <span class="hljs-keyword">from</span> <span class="hljs-string">'weui-distpicker'</span>

		<span class="hljs-keyword">export</span> <span class="hljs-keyword">default</span> {
		  <span class="hljs-attr">components</span>: { WeuiDistpicker }
		}
		</code></pre>
        <h3 id="-">简单使用</h3>
        <p><strong>基础</strong></p>
        <pre><code class="lang-javascript hljs">&lt;weui-distpicker&gt;<span class="xml"><span class="hljs-tag">&lt;/<span class="hljs-name">weui-distpicker</span>&gt;</span>
		</span></code></pre>
        <p><strong>默认值</strong></p>
        <pre><code class="lang-javascript hljs">&lt;weui-distpicker province=<span class="hljs-string">"广东省"</span> city=<span class="hljs-string">"广州市"</span> area=<span class="hljs-string">"海珠区"</span>&gt;<span class="xml"><span class="hljs-tag">&lt;/<span class="hljs-name">weui-distpicker</span>&gt;</span>
		</span></code></pre>
        <h1 id="-weui-distpicker-http-weui-distpicker-iline-co-">简单预览<a href="http://weui-distpicker.iline.co">weui-distpicker</a></h1>
        <p><img src="https://pig-storage.b0.upaiyun.com/article/2017/06/01/N6dp32U8PHWJMLrXboHT2z7XSLYltLidGBzqaNdS.jpg" alt="weui-distpicker-example.png"></p>
        <p>最后，求一波 <code>stars</code> <a href="https://github.com/jcc/weui-distpicker">https://github.com/jcc/weui-distpicker</a> 2333333.</p>

    </div>
    <!-- article content end -->

    <!-- operation start -->
    <div id="art-operation">
        <p><strong>更多请关注 <a href="https://pigjian.com">PJ Blog</a></strong></p>
        <div class="alert alert-info alert-dismissable">
            <button type="button" class="close" data-dismiss="alert"
                    aria-hidden="true">
                &times;
            </button>
            信息！请注意这个信息。信息！请注意这个信息。信息！请注意这个信息。信息！请注意这个信息。信息！请注意这个信息。信息！请注意这个信息。信息！请注意这个信息。信息！请注意这个信息。
        </div>

        <div>
            <p><strong>分享：</strong></p>
            <a href="#" class="am-icon-btn am-icon-qq" style="border-color: #56b6e7;color: #56b6e7;"></a>
            <a href="#" class="am-icon-btn am-icon-weixin" style="border-color: #7bc549;color: #7bc549;"></a>
            <a href="#" class="am-icon-btn am-icon-weibo" style="border-color: #ff763b;color: #ff763b;"></a>
        </div>

        <!-- 展示评论 start -->
        <p style="margin-top: 15px;"><strong>评论：</strong></p>


        <div class="show-user-img">
            <img class="img-circle" src="https://pig-storage.b0.upaiyun.com/avatar/2017/05/26/p10KIqKGuCt1FFEq3bFPtgj4Etat2816Dd8IJPVz.jpg" alt="">
        </div>

        <div class="panel panel-default margin-80">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <div class="discuss">
                        <span class="glyphicon glyphicon-user"></span> <span class="username">chicho</span>
                        <span class="glyphicon glyphicon-time" style="margin-left: 20px;"></span>  两天前
                        <button class="pull-right reply-btn" onclick="
			        		$('#comment').val('@'+$(this).parent().children('.username').text()+' ');
			        		">
                            <span class="am-icon-reply"></span>
                        </button>
                    </div>
                </h3>
            </div>
            <div class="panel-body">
                我是一条评论
            </div>
        </div>

        <div class="show-user-img">
            <img class="img-circle" src="https://pig-storage.b0.upaiyun.com/avatar/2017/05/26/p10KIqKGuCt1FFEq3bFPtgj4Etat2816Dd8IJPVz.jpg" alt="">
        </div>

        <div class="panel panel-default margin-80">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <div class="discuss">
                        <span class="glyphicon glyphicon-user"></span> <span class="username">chicho</span>
                        <span class="glyphicon glyphicon-time" style="margin-left: 20px;"></span>  两天前
                        <button class="pull-right reply-btn" onclick="
			        		$('#comment').val('@'+$(this).parent().children('.username').text()+' ');
			        		">
                            <span class="am-icon-reply"></span>
                        </button>
                    </div>
                </h3>
            </div>
            <div class="panel-body">
                我是一条评论
            </div>
        </div>

        <!-- 展示评论 end -->

        <!-- comment start -->
        <form role="form" style="margin-bottom: 40px;">
            <div class="form-group">
                <textarea id="comment" class="form-control" rows="7" style="resize: none;"></textarea>
            </div>
            <div class="form-group">
                <button type="button" class="btn btn-primary pull-right">发表评论</button>
            </div>
        </form>
        <!-- comment end -->

    </div>
    <!-- operation end -->

    <!-- footer -->
    <div id="footer">
        <div class="connect">
            <a href="#"><span class="glyphicon glyphicon-home" style="color: #fff;"></span></a>

        </div>

        <div class="link">
            <a href="#">友情链接</a>
            <a href="#">关于我</a>
        </div>

        <div class="for-record">
            @copy chicho 2017 粤ICP备16020344号-1
        </div>

    </div>

</div>


</body>
</html>