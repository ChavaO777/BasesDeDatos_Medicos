<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//$queryID = DB::table('states')->where('name', '=', 'Puebla')->get(['id']);

        DB::table('cities')->insert([
        	'name' => 'Puebla',
        	'state_id' => 1,
        ]);

        DB::table('cities')->insert([
        	'name' => 'Guadalajara',
        	'state_id' => 2,
        ]);

        DB::table('cities')->insert([
        	'name' => 'Oaxaca',
        	'state_id' => 3,
        ]);
    }
}
