<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\ArticlePost;
use App\Models\Admin\Article;
use App\Models\Admin\ArticleTags;
use App\Models\Tags;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function index(){
        return view('admin.article');
    }

    public function edit(){
        $tags = Tags::getByFeild(['status'=>1]);
        return view('admin.edit_article',[
            'tags'=>$tags
        ]);
    }

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
