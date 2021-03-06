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

Route::get('/', 'HomeController@index');

//Profile Routes

Route::post('/show_doctor', "DoctorController@show");

Route::post('/show_hospital', "HospitalController@show");

Auth::routes();

//Login Routes

Route::get('/home', 'HomeController@index');

Route::get('/loginOpt', 'LoginOptionsController@index');

Route::get('/docLogin', 'DoctorLoginController@index');

Route::get('/patLogin', 'PatientLoginController@index');

Route::get('/suscribeOpt', 'SuscribeController@index');

Route::get('/doctorSuscribe', 'DoctorRegisterController@index');

Route::get('/patientSuscribe', 'PatientRegisterController@index');

Route::post('/results_hospitals', 'SearchController@searchHospitals');

Route::post('/results_doctors', 'SearchController@searchDoctors');


//Search Routes

Route::get('/search_doctor', "SearchDoctorController@index");

Route::get('/search_hospital', "SearchHospitalController@index");

//Register Routes
Route::post('/register_doctor', 'DoctorRegisterController@create');

Route::post('/register_patient', 'PatientRegisterController@create');

//Write review routes

Route::post('/write_review', 'HomeController@writeReview');
Route::post('/save_review', 'ReviewsController@create');

//Consult reviews

Route::post('/approve_review', 'ReviewsController@approve');
Route::post('/reject_review', 'ReviewsController@reject');

//My profile (doctor)

Route::post('/my_profile', 'ProfileController@my_profile');