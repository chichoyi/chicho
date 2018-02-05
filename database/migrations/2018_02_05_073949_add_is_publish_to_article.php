<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIsPublishToArticle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('article', function (Blueprint $table) {
            $table->unsignedTinyInteger('is_publish')->default(0)->comment('是否发布 0-未发布 1-已经发布');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('article', function (Blueprint $table) {
            $table->unsignedTinyInteger('is_publish')->default(0)->comment('是否发布 0-未发布 1-已经发布');
        });
    }
}
