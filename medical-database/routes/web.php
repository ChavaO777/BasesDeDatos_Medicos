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
	
	$doctor = App\Doctor::where('id', 2)->first(); //Fake value 1... The function must receive the doctor's id!!
	$tota_doctor_reviews = App\Review::where('doctor_id', 2);
		
	// return dd($doctorA);

	return view('docProfile', ['doctor' => $doctor , 'total_doctor_reviews' => $total_doctor_reviews]);
});

// Route::get('/search_hospital/{hospital_id}', function($hospital_id) {
Route::get('/search_hospital/', function() {

	$hospital = App\Hospital::where('id', 1)->first(); //Fake value 1... The function must receive the hospital's id!!
	$total_hospital_office = App\Office::where('hospital_id', 1);
	$total_doctors_offices = App\Doctor_Office::whereIn('office_id', $total_hospital_office -> 'id');

	$total_doctors = App\Doctor::whereIn('id', $total_doctors_offices->'doctor_id');

	return view('hospProfile', ['hospital' => $hospital, 'total_doctors' => $total_doctors]);
});
