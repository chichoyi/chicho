@extends('layouts.chicho-app')

@section('child-css')
    <link href="{{ asset('css/articles.css') }}" rel="stylesheet">
@endsection

@section('banner')
    <div id="banner">
        <div id="motto">
            心之所向，<br/>无所不成
            <h6>http://yinshan.me</h6>
        </div>
    </div>
@endsection

@section('content')
    <div id="article-group">

        <div class="article-item">
            <div class="a-img">
                <a href="{{ url('article/1') }}"><img src="https://pigjian.com/storage/post_img/2017-04-12/follow-vote.png" alt=""></a>
            </div>
            <div class="article-intr">
                <a href="{{ url('article/1') }}" class="intr-a"><div class="main-title">Vue 组件 — V - TextcompleteVueTextcompleteVue 组件</div></a>
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

    <div class="pages">
        <ul class="pagination">
            <li><a href="#">&laquo;</a></li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">&raquo;</a></li>
        </ul>
    </div>

@endsection

