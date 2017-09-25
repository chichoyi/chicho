<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100)->default('')->comment('用户名');
            $table->string('email',50)->default('')->comment('邮箱');
            $table->string('password',100)->default('')->comment('密码');
            $table->string('avatar')->default('')->comment('头像');
            $table->unsignedInteger('ip')->default(0)->comment('用户ip地址');
            $table->rememberToken()->default('')->comment('记住我 令牌');
            $table->unsignedTinyInteger('type')->default(2)->comment('类型  1-管理员 2-普通用户');
            $table->unsignedTinyInteger('status')->default(1)->comment('状态 0-删除 1-正常 2停用');
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
        Schema::dropIfExists('users');
    }
}
