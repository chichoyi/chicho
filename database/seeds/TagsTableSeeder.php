<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            ['tag'=>'laravel','description'=>'php开发框架'],
            ['tag'=>'composer','description'=>'php包管理工具'],
            ['tag'=>'docker','description'=>'docker容器'],
            ['tag'=>'linux','description'=>'linux'],
            ['tag'=>'php7','description'=>'php7'],
            ['tag'=>'lnmp','description'=>'php开发环境'],
            ['tag'=>'centos','description'=>'centos'],
            ['tag'=>'api','description'=>'api'],
            ['tag'=>'mysql','description'=>'mysql数据库'],
        ]);
    }
}
