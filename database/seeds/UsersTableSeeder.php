<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            \Illuminate\Support\Facades\DB::table('users')->insert([
                'name' => "JohnDoe$i",
                'email' => "john$i@doe.fr",
                'password' => Hash::make('0000'),
            ]);
        }
    }
}
