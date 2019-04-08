<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    // DB::statement('SET FOREIGN_KEY_CHECKS=0');
    DB::table('users')->truncate();

    // generate 3 users
    DB::table('users')->insert([
        [
            'name'      => "John Doe",
            'email'     => "johndoe@test.com",
            'password'  => bcrypt('secret')
        ],
        [
            'name'      => "Jane Doe",
            'email'     => "janendoe@test.com",
            'password'  => bcrypt('secret')
        ],
        [
            'name'      => "Edo Doe",
            'email'     => "edo@test.com",
            'password'  => bcrypt('secret')
        ],
    ]);

    }
}
