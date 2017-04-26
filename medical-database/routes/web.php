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

Route::get('/search_doctor/1', function() {
	
	$doctor = App\Doctor::where('id', 1)->get();
	return view('docProfile', $doctor);
});
