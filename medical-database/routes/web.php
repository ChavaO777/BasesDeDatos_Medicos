<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    
    return view('all_doctors');
});

// Route::get('/search_doctor/{doctor_id}', function($doctor_id) {

Route::get('/search_doctor/', function() {
	
	$doctor = App\Doctor::where('id', 1)->first(); //Fake value 1... The function must receive the doctor's id!!
	$total_doctor_reviews = App\Review::where('doctor_id', 1);
		
	// return dd($doctorA);

	return view('docProfile', ['doctor' => $doctor , 'total_doctor_reviews' => $total_doctor_reviews]);
});

// Route::get('/search_hospital/{hospital_id}', function($hospital_id) {
Route::get('/search_hospital/', function() {

	 $hospital = App\Hospital::where('id', 1)->first(); //Fake value 1... The function must receive the hospital's id!!

	$total_doctors = DB::table('hospitals')
			->select('hospitals.address_id', 'hospitals.id')
			->where('hospitals.id', '=', 1)
			->join('offices', 'hospitals.id', '=', 'offices.hospital_id')
			->join('doctors_offices', 'offices.id', '=', 'doctors_offices.id')
			->join('doctors', 'doctors.id', '=', 'doctors_offices.id')
			->join('addresses', 'addresses.id', '=', 'offices.address_id')
			->select('doctors.first_name', 'doctors.last_name', 'addresses.id')
			->get();

	$address = DB::table('hospitals')
				->select('hospitals.address_id', 'hospitals.id')
				->where('hospitals.id', '=', 1)
				->join('addresses', 'hospitals.address_id', '=', 'addresses.id')
				->select('addresses.street')
				->first();

	// return dd($total_doctors);

	return view('hospProfile', ['hospital' => $hospital, 'total_doctors' => $total_doctors, 'address' => $address]);
});
