<?php

use Illuminate\Database\Seeder;

class PatientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('patients')->insert([
        	'first_name' => 'Juan',
        	'last_name' => 'Perez',
        	'password' => 'hola123',
        	'birthdate' => '1993-06-23',
        	'age' => 23,
        ]);

        DB::table('patients')->insert([
        	'first_name' => 'Daniela',
        	'last_name' => 'Lopez',
        	'password' => 'adios123',
        	'birthdate' => '1995-11-24',
        	'age' => 21,
        ]);
    }
}
