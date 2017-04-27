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

// Route::get('/show_doctor/{doctor_id}', function($doctor_id) {

Route::get('/show_doctor/', function() {
		
	$doctor_id = 2;	

	$doctor = App\Doctor::where('id', $doctor_id)->first(); 
	$total_doctor_reviews = App\Review::where('doctor_id', $doctor_id);
		
	$doctor_specialty = App\Specialty::where('id', $doctor->specialty_id)->first();

	return view('docProfile', ['doctor' => $doctor , 'total_doctor_reviews' => $total_doctor_reviews, 'specialty' => $doctor_specialty]);
});

// Route::get('/show_hospital/{hospital_id}', function($hospital_id) {
Route::get('/show_hospital/', function() {

	$hospital_id = 2;

	$hospital = App\Hospital::where('id', $hospital_id)->first(); 

	$total_doctors = DB::table('hospitals')
		->select('hospitals.address_id', 'hospitals.id')
		->where('hospitals.id', '=', $hospital_id)
		->join('offices', 'hospitals.id', '=', 'offices.hospital_id')
		->join('doctors_offices', 'offices.id', '=', 'doctors_offices.id')
		->join('doctors', 'doctors.id', '=', 'doctors_offices.id')
		->join('addresses', 'addresses.id', '=', 'offices.address_id')
		->select('doctors.first_name', 'doctors.last_name', 'addresses.id')
		->get();

	$address = DB::table('hospitals')
		->select('hospitals.address_id', 'hospitals.id')
		->where('hospitals.id', '=', $hospital_id)
		->join('addresses', 'hospitals.address_id', '=', 'addresses.id')
		->select('addresses.street', 'addresses.number', 'addresses.suburb')
		->first();

	return view('hospProfile', ['hospital' => $hospital, 'total_doctors' => $total_doctors, 'address' => $address]);
});

Route::get('/search_hospital/', function() {


});
