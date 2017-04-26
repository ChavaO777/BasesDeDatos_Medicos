<?php

use Illuminate\Database\Seeder;

class SpecialtiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('specialties')->insert([
        	'code' => 'PED',
        	'name' => 'Pediatra',
        ]);

        DB::table('specialties')->insert([
        	'code' => 'CAR',
        	'name' => 'Cardiologo',
        ]);
    }
}
