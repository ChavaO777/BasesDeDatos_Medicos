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
Route::get('/show_hospital/{hospital_id}', "HospitalController@show");

Route::get('/search_hospital/', function() {

	return view('busquedaHosp');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
