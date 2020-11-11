<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('users')->truncate();

       DB::table('users')->insert([
		'namuse' => 'Ronald',
		'lastname' => 'Castillo',
		'maiuse' => 'jronaldcll@gmail.com',
		'fecnac' => '1993-09-29',
		'password' => '$2y$10$3vqRNKHIRa.MxEWxoOXMk.2qM.1Kg4FlRUC.OOT9ZuCT3CTeN6O.q'
	]);

       DB::table('users')->insert([
		'namuse' => 'Jorge',
		'lastname' => 'Castillo',
		'maiuse' => 'jronaldcll@hotmail.com',
		'fecnac' => '1993-09-29',
		'password' => '$2y$10$CyhgmjkxMw2lm12o7RKb4uMWvI.Go9kxBx6LL0MAJRIDKeGBXnpPm'
	]);
 
    }
}
