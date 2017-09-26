<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    use Common;

    protected $fillable = ['url', 'title', 'description'];
}
