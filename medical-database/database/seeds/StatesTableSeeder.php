<?php

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->insert([
        	'name' => 'Puebla',
        ]);

        DB::table('states')->insert([
        	'name' => 'Jalisco',
        ]);

        DB::table('states')->insert([
        	'name' => 'Oaxaca',
        ]);
    }
}
