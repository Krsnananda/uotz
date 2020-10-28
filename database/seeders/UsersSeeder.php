<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
        'name' => 'Diego',
        'email' => 'krsnananda@hotmail.com',
        'password' => Hash::make('123456'),
        'created_at' => date("Y-m-d H:m:s")
      ]);
    }
}
