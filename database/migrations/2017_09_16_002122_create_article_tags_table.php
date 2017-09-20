<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_tags', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('article_id')->default(0)->comment('文章id');
            $table->unsignedInteger('tags_id')->default(0)->comment('标签id');
            $table->unsignedTinyInteger('status')->default(1)->comment('0-删除 1-正常 2-停用');
            //$table->timestamps();记得在模型设置false
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article_tags');
    }
}
