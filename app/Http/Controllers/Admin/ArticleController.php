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
    public function index(){
        $articles = Article::getList(config('system.perPage'), 1);
        return view('admin.article', [
            'articles' => $articles
        ]);
    }

    public function edit(){
        $tags = Tags::getList(config('system.perPage'), 1);
        dd($tags->toArray());

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
            'title'=>$title,
            'cover_url'=>$cover,
            'content'=>$content,
            'description'=>$description,
            'user_id'=>$user_id
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

}
