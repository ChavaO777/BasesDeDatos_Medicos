<?php

use Illuminate\Database\Seeder;

class HospitalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hospitals')->insert([
        	'name' => 'Hospital Angeles',
        	'address_id' => 1,
        ]);

        DB::table('hospitals')->insert([
        	'name' => 'Hospital de Guadalajara',
        	'address_id' => 2,
        ]);
    }
}
