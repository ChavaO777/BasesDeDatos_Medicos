<?php

use Illuminate\Database\Seeder;

class Doctors_OfficesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('doctors_offices')->insert([
        	'doctor_id' => 1,
        	'office_id' => 1,
        ]);

        DB::table('doctors_offices')->insert([
        	'doctor_id' => 2,
        	'office_id' => 2,
        ]);

    }
}
