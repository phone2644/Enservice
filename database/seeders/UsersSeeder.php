<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name'=>'สุรเพชร',
            'email'=>'zxcv1234@gmail.com',
            'usertype'=>'1',
            'password'=>bcrypt('x0821028504x'),
        ]);
    }
}
