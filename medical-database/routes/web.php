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

// Route::get('/search_doctor/{doctor_id}', function($doctor_id)){

Route::get('/search_doctor/', function() {
	
	$doctorA = App\Doctor::where('id', 2)->first(); //Fake value 1... The function must receive the doctor's id!!
	$doctor_reviewsA = App\Review::where('doctor_id', 2)->first();
		
	// return dd($doctorA);

	return view('docProfile', ['doctor' => $doctorA , 'doctor_reviews' => $doctor_reviewsA]);
});
