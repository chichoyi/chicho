<?php

use Illuminate\Database\Seeder;

class InitialAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name' => 'chicho',
            'email' => 'cys843755799@163.com',
            'password' => bcrypt('chicho'),
        ]);
    }
}
