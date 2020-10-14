<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CandidatosSeeder extends Seeder
{
	/**
	 * Run the database seeds.
		*
		* @return void
		*/
	public function run()
    {
			DB::table([
			    'name' => 'Hardik',
			    'email' => 'admin@gmail.com',
			    'password' => bcrypt('123456'),
			]);
    }
}
