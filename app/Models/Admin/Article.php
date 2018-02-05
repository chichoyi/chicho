<?php

namespace App\Models\Admin;

use App\Models\Common;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use Common;

    protected $table = 'article';

    protected $fillable = ['title', 'images_id', 'description', 'keywords', 'content', 'is_original', 'user_id', 'num', 'is_publish'];

    public function article_tags(){
        return $this->hasMany('App\Models\Admin\ArticleTags');
    }

    public function images(){
        return $this->belongsTo('App\Models\Images', 'images_id');
    }

}
