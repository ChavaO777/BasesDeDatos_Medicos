<?php

use Illuminate\Database\Seeder;

class DoctorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('doctors')->insert([
        	'medical_id' => "9866983",
        	'specialty_id' => 1,
        	'first_name' => 'Mauricio',
        	'last_name' => 'Romero',
        	'password' => 'hola123',
        	'consultation_cost' => 500,
        ]);

        DB::table('doctors')->insert([
        	'medical_id' => "3766983",
        	'specialty_id' => 2,
        	'first_name' => 'Pedro',
        	'last_name' => 'Gomez',
        	'password' => 'hola123',
        	'consultation_cost' => 800,
        ]);
    }
}
