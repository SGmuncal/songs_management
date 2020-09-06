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
        //
        for ($i=0; $i < 30; $i++) { 
            DB::table('users')->insert([
               'name' => str_random(6),
               'email' => strtolower(str_random(6)).'@gmail.com',
               'password' => bcrypt('123456'),
               'created_at'=>date('Y-m-d H:i:s')

           ]);
        }
    }
}
