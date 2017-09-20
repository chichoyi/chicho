<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_comment', function (Blueprint $table) {
            $table->increments('id');
            $table->text('comment')->comment('评论');
            $table->unsignedTinyInteger('article_id')->default(1)->comment('文章id');
            $table->unsignedTinyInteger('user_id')->default(1)->comment('用户id');
            $table->unsignedTinyInteger('status')->default(1)->comment('0-删除 1-正常 2-停用');
            $table->timestamps();
            //a_id,u_id,comment,status,create_time,commentable_type
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article_comment');
    }
}
