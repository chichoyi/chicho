<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('url',100)->default('')->comment('图片地址');
            $table->string('title',100)->default('')->comment('图片标题');
            $table->string('description',200)->default('')->comment('图片描述');
            $table->unsignedTinyInteger('is_used')->default(1)->comment('1-未使用 2-已经使用');
            $table->unsignedTinyInteger('status')->default(1)->comment('0-删除 1-正常 2-停用');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('images');
    }
}
