<?php

use Illuminate\Database\Seeder;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
        	'patient_id' => 1,
        	'doctor_id' => 1,
        	'date' => '2017-02-04',
        	'rating' => 4,
        	'text' => 'Todo muy bien',
        	'reply' => 'Gracias',
        	'approval' => 1,
        	'consultation_cost' => 500,
        ]);

        DB::table('reviews')->insert([
        	'patient_id' => 2,
        	'doctor_id' => 2,
        	'date' => '2017-01-04',
        	'rating' => 3,
        	'text' => 'No Todo muy bien',
        	'reply' => 'Gracias :(',
        	'approval' => 1,
        	'consultation_cost' => 800,
        ]);
    }
}
