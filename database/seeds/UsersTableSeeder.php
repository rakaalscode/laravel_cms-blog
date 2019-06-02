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
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        
        DB::table('users')->truncate();

        DB::table('users')->insert([
            [
                'name' => 'Rakaal',
                'email' => 'rakaal@gmail.com',
                'slug' => 'rakaal',
                'password' => bcrypt('secret')
            ],
            [
                'name' => 'Scarlet',
                'email' => 'scarlet@gmail.com',
                'slug' => 'scarlet',
                'password' => bcrypt('secret')
            ],
            [
                'name' => 'Bakugou',
                'email' => 'bakugou@gmail.com',
                'slug' => 'bakugou',
                'password' => bcrypt('secret')
            ],
        ]
        );
    }
}
