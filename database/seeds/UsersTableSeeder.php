<?php

use Illuminate\Database\Seeder;
// use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->insert([
        //     'name' => 'Milan',
        //     'email' => 'milan@milan.com',
        //     'password' => 'password'
        // ]);

        factory(\App\User::class, 5)->create();
    }
}
