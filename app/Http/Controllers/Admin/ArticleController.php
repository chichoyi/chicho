<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\ArticlePost;
use App\Models\Admin\Article;
use App\Models\Admin\ArticleTags;
use App\Models\Images;
use App\Models\Tags;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    /**
     * @description 文章列表
     * @author chicho
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function articles(Request $request){
        if (!$request->page) $request->page = 1;
        $articles = Article::getList(config('system.perPage'), $request->page, [], ['*'], [
            'article_tags' => function($q){
                $q->with([
                    'tags' =>function($q_t){
                        $q_t->select('id', 'tag');
                    }
                ]);
                $q->select('id', 'tags_id', 'article_id');
            }
        ]);
        return view('admin.article', [
            'articles' => $articles
        ]);
    }

    /**
     * @description 编辑文章页面
     * @author chicho
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(){
        $tags = Tags::getByFeild();
        return view('admin.edit_article',[
            'tags' => $tags
        ]);
    }

    /**
     * @description 添加文章
     * @author chicho
     * @param ArticlePost $request
     * @return string
     */
    public function add(ArticlePost $request){
        $tags = $request->input('tags');
        $content = $request->input('content');
        $title = $request->input('title');
        $description = $request->input('description');
        $cover = $request->input('cover');
        $user_id = Auth::guard('admin')->id();

        DB::beginTransaction();

        $result_a = Article::add([
            'title' => $title,
            'images_id' => $cover,
            'content' => $content,
            'description' => $description,
            'user_id' => $user_id
        ]);

        foreach ($tags as $key => $value){
            $tags_data[$key]['tags_id'] = $value;
            $tags_data[$key]['article_id'] = $result_a->id;
        }

        if ($result_a){
            $result_t = ArticleTags::insert($tags_data);
            if ($result_t) {
                DB::commit();
                return success(20000, 'admin/article');
            }
        }

        DB::rollBack();
        return error(50000);
    }

    /**
     * @description 是否发布文章
     * @author chicho
     * @param ArticlePost $request
     * @param $id
     * @return string
     */
    public function isPublish(ArticlePost $request, $id){
        $is_publish = $request->is_publish;
        if (Article::putByField(['id' => $id], ['is_publish' => $is_publish]))
            return success(20000);
        else
            return error(50000);
    }

}
