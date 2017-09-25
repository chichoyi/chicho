<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    use Common;

    public $timestamps = false;


    protected $fillable = ['tag', 'description'];

}
