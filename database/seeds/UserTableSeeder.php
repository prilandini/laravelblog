<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // set foreign key 0 if use mysql
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        
        DB::table('users')->truncate();

        DB::table('users')->insert([
            [
                'name' => 'Pril',
                'email' => 'pril@gmail.com',
                'password' => bcrypt('1234')
            ],
            [
                'name' => 'Lala',
                'email' => 'lala@gmail.com',
                'password' => bcrypt('1234')
            ],
            [
                'name' => 'Nana',
                'email' => 'nana@gmail.com',
                'password' => bcrypt('1234')
            ],
        ]);

        // turn on foreign key check
    	DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
