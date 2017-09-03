<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>志高意-blog</title>
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" >
    <link href="{{ asset('css/common.css') }}" rel="stylesheet">
    <link href="{{ asset('css/blog.css') }}" rel="stylesheet">
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
                <div class="item-nav"><a href="{{ route('article') }}">文章</a></div>
                <div class="item-nav"><a href="#">标签</a></div>
                <div class="item-nav"><a href="#">分享</a></div>
            </div>
            <div id="right-nav">
                <div class="item-nav"><a href="#">注册</a></div>
                <div class="item-nav"><a href="#">登录</a></div>
                <div class="search"><input type="text" placeholder="search"></div>
            </div>
        </div>
        <div id="blog-motto">
            心之所向，无所不成
            <h6>http://yinshan.me</h6>
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
                <a class="navbar-brand" style="color: #fff;" href="#">chicho</a>
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
        心之所向，无所不成
        <h6>http://yinshan.me</h6>
    </div>


    <div id="article-group">

        <div class="article-item">
            <div class="a-img">
                <a href="#"><img src="https://pigjian.com/storage/post_img/2017-04-12/follow-vote.png" alt=""></a>
            </div>
            <div class="article-intr">
                <a href="#" class="intr-a"><div class="main-title">Vue 组件 — V - TextcompleteVueTextcompleteVue 组件</div></a>
                <div class="art-describe">Vue 组件 — V - TextcompleteVue 组件 — V - TextcompleteVue 组件 — V - TextcompleteVue 组件 — V - TextcompleteVue 组件 — V - TextcompleteVue 组件 — V - Textcomplete</div>
                <div class="art-tags">
                    <a href="#" class="tag-a"><div class="tag-item">
                            <span class="glyphicon glyphicon-tag"></span>  composer
                        </div></a>
                    <a href="#" class="tag-a"><div class="tag-item">
                            <span class="glyphicon glyphicon-tag"></span>  vue
                        </div></a>
                    <a href="#" class="tag-a"><div class="tag-item">
                            <span class="glyphicon glyphicon-tag"></span>  laravel
                        </div></a>
                </div>
                <div class="art-info">
                    <span class="glyphicon glyphicon-user"></span>   chicho  ,
                    <span class="glyphicon glyphicon-time"></span>   2天前  ,
                    <span class="glyphicon glyphicon-eye-open"></span>   205
                    <span class="read-more">
						<a href="#" class="read-more-a">read more</a>
						<span class="glyphicon glyphicon-chevron-right"></span>
					</span>
                </div>
            </div>
        </div>

        <div class="article-item">
            <div class="a-img">
                <a href="#"><img src="https://pig-storage.b0.upaiyun.com/cover/2017/08/28/erA3jCfZkCxK0Aao7pbMmQtFS34ih9K40pjIdMWc.png" alt=""></a>
            </div>
            <div class="article-intr">
                <a href="#" class="intr-a"><div class="main-title">Vue 组件 — V - TextcompleteVue</div></a>
                <div class="art-describe">Vue 组件 — V - TextcompleteVue 组件 — V - TextcompleteVue 组件 — V - TextcompleteVue 组件 — V - TextcompleteVue 组件 — V - TextcompleteVue 组件 — V - Textcomplete</div>
                <div class="art-tags">
                    <a href="#" class="tag-a"><div class="tag-item">
                            <span class="glyphicon glyphicon-tag"></span>  composer
                        </div></a>
                    <a href="#" class="tag-a"><div class="tag-item">
                            <span class="glyphicon glyphicon-tag"></span>  vue
                        </div></a>
                </div>
                <div class="art-info">
                    <span class="glyphicon glyphicon-user"></span>   chicho  ,
                    <span class="glyphicon glyphicon-time"></span>   2天前  ,
                    <span class="glyphicon glyphicon-eye-open"></span>   205
                    <span class="read-more">
						<a href="#" class="read-more-a">read more</a>
						<span class="glyphicon glyphicon-chevron-right"></span>
					</span>
                </div>
            </div>
        </div>

        <div class="article-item">
            <div class="a-img">
                <a href="#"><img src="https://pigjian.com/storage/post_img/2017-04-12/follow-vote.png" alt=""></a>
            </div>
            <div class="article-intr">
                <a href="#" class="intr-a"><div class="main-title">Vue 组件 — V - TextcompleteVue</div></a>
                <div class="art-describe">Vue 组件 — V - TextcompleteVue 组件 — V - TextcompleteVue 组件 — V - TextcompleteVue 组件 — V - TextcompleteVue 组件 — V - TextcompleteVue 组件 — V - Textcomplete</div>
                <div class="art-tags">
                    <a href="#" class="tag-a"><div class="tag-item">
                            <span class="glyphicon glyphicon-tag"></span>  composer
                        </div></a>
                    <a href="#" class="tag-a"><div class="tag-item">
                            <span class="glyphicon glyphicon-tag"></span>  vue
                        </div></a>
                </div>
                <div class="art-info">
                    <span class="glyphicon glyphicon-user"></span>   chicho  ,
                    <span class="glyphicon glyphicon-time"></span>   2天前  ,
                    <span class="glyphicon glyphicon-eye-open"></span>   205
                    <span class="read-more">
						<a href="#" class="read-more-a">read more</a>
						<span class="glyphicon glyphicon-chevron-right"></span>
					</span>
                </div>
            </div>
        </div>

        <div class="article-item">
            <div class="a-img">
                <a href="#"><img src="https://pigjian.com/storage/post_img/2017-04-12/follow-vote.png" alt=""></a>
            </div>
            <div class="article-intr">
                <a href="#" class="intr-a"><div class="main-title">Vue 组件 — V - TextcompleteVue</div></a>
                <div class="art-describe">Vue 组件 — V - TextcompleteVue 组件 — V - TextcompleteVue 组件 — V - TextcompleteVue 组件 — V - TextcompleteVue 组件 — V - TextcompleteVue 组件 — V - Textcomplete</div>
                <div class="art-tags">
                    <a href="#" class="tag-a"><div class="tag-item">
                            <span class="glyphicon glyphicon-tag"></span>  composer
                        </div></a>
                    <a href="#" class="tag-a"><div class="tag-item">
                            <span class="glyphicon glyphicon-tag"></span>  vue
                        </div></a>
                </div>
                <div class="art-info">
                    <span class="glyphicon glyphicon-user"></span>   chicho  ,
                    <span class="glyphicon glyphicon-time"></span>   2天前  ,
                    <span class="glyphicon glyphicon-eye-open"></span>   205
                    <span class="read-more">
						<a href="#" class="read-more-a">read more</a>
						<span class="glyphicon glyphicon-chevron-right"></span>
					</span>
                </div>
            </div>
        </div>

        <div class="article-item">
            <div class="a-img">
                <a href="#"><img src="https://pigjian.com/storage/post_img/2017-04-12/follow-vote.png" alt=""></a>
            </div>
            <div class="article-intr">
                <a href="#" class="intr-a"><div class="main-title">Vue 组件 — V - TextcompleteVue</div></a>
                <div class="art-describe">Vue 组件 — V - TextcompleteVue 组件 — V - TextcompleteVue 组件 — V - TextcompleteVue 组件 — V - TextcompleteVue 组件 — V - TextcompleteVue 组件 — V - Textcomplete</div>
                <div class="art-tags">
                    <a href="#" class="tag-a"><div class="tag-item">
                            <span class="glyphicon glyphicon-tag"></span>  composer
                        </div></a>
                    <a href="#" class="tag-a"><div class="tag-item">
                            <span class="glyphicon glyphicon-tag"></span>  vue
                        </div></a>
                </div>
                <div class="art-info">
                    <span class="glyphicon glyphicon-user"></span>   chicho  ,
                    <span class="glyphicon glyphicon-time"></span>   2天前  ,
                    <span class="glyphicon glyphicon-eye-open"></span>   205
                    <span class="read-more">
						<a href="#" class="read-more-a">read more</a>
						<span class="glyphicon glyphicon-chevron-right"></span>
					</span>
                </div>
            </div>
        </div>

        <div class="article-item no-border">
            <div class="a-img">
                <a href="#"><img src="https://pigjian.com/storage/post_img/2017-04-12/follow-vote.png" alt=""></a>
            </div>
            <div class="article-intr">
                <a href="#" class="intr-a"><div class="main-title">Vue 组件 — V - TextcompleteVue V - Textcompl</div></a>
                <div class="art-describe">Vue 组件 — V - TextcompleteVue 组件 — V - TextcompleteVue 组件 — V - TextcompleteVue 组件 — V - TextcompleteVue 组件 — V - TextcompleteVue 组件 — V - Textcomplete</div>
                <div class="art-tags">
                    <a href="#" class="tag-a"><div class="tag-item">
                            <span class="glyphicon glyphicon-tag"></span>  composer
                        </div></a>
                    <a href="#" class="tag-a"><div class="tag-item">
                            <span class="glyphicon glyphicon-tag"></span>  vue
                        </div></a>
                </div>
                <div class="art-info">
                    <span class="glyphicon glyphicon-user"></span>   chicho  ,
                    <span class="glyphicon glyphicon-time"></span>   2天前  ,
                    <span class="glyphicon glyphicon-eye-open"></span>   205
                    <span class="read-more">
						<a href="#" class="read-more-a">read more</a>
						<span class="glyphicon glyphicon-chevron-right"></span>
					</span>
                </div>
            </div>
        </div>

    </div>



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