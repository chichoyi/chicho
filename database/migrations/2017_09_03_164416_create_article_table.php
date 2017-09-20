<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',100)->default('')->comment('标题');
            $table->string('cover_url',100)->default('')->comment('封面地址');
            $table->string('description',100)->default('')->comment('描述');
            //$table->string('tags_id',100)->default('')->comment('标签id');
            $table->string('keywords',100)->default('')->comment('关键词');
            $table->text('content')->comment('文章内容');
            $table->unsignedTinyInteger('is_original')->default(1)->comment('1-原创 2-非原创');
            $table->unsignedTinyInteger('user_id')->default(1)->comment('作者id');
            $table->unsignedInteger('num')->default(0)->comment('浏览数');
            $table->unsignedTinyInteger('status')->default(1)->comment('0-删除 1-正常 2-停用');
            $table->timestamps();
            //title,cover_url,description,tags_id,content,is_original,timestamps,u_id,status,category_id,subtitle,keyword
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article');
    }
}
