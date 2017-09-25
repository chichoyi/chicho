<?php

use Illuminate\Database\Seeder;

class InitialUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'chicho',
            'email' => 'cys843755799@163.com',
            'password' => bcrypt('chicho'),
            'type' => 1
        ]);
    }
}
