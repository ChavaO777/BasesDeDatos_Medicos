<?php

use Illuminate\Database\Seeder;

class OfficesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('offices')->insert([
        	'address_id' => 1,
        	'phone' => 22221234,
        	'hospital_id' => 1,
        ]);

        DB::table('offices')->insert([
        	'address_id' => 2,
        	'phone' => 55521238,
        	'hospital_id' => 2,
        ]);
    }
}
