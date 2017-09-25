<?php

namespace App\Models\Admin;

use App\Models\Common;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use Common;

    protected $table = 'article';

    protected $fillable = ['title', 'cover_url','description','keywords','content','is_original','user_id','num'];

}
