<?php

use Illuminate\Database\Seeder;

class AddressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('addresses')->insert([
        	'street' => '11 Sur',
        	'number' => 3212,
        	'suburb' => 'La paz',
        	'interior_number' => 5,
        	'zip_code' => 72563,
        	'city_id' => 1,
        ]);

        DB::table('addresses')->insert([
        	'street' => '9 Norte',
        	'number' => 9312,
        	'suburb' => 'Centro',
        	'interior_number' => 1,
        	'zip_code' => 57392,
        	'city_id' => 2,
        ]);

    }
}
