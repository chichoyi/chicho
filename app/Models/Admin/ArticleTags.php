<?php

namespace App\Models\Admin;

use App\Models\Common;
use Illuminate\Database\Eloquent\Model;

class ArticleTags extends Model
{
    use Common;

    public $timestamps = false;

    protected $table = 'article_tags';

    protected $fillable = ['article_id', 'tags_id'];
}
