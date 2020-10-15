<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AutoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('autores')->insert([
        'nome' => 'Diego',
        'email' => 'krsnananda@hotmail.com',
        'senha' => Hash::make('123456'),
      ]);
    }
}
