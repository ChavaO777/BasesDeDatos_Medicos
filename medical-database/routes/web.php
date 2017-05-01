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

Route::get('/show_doctor/{doctor_id}', "DoctorController@show");

Route::get('/show_hospital/{hospital_id}', "HospitalController@show");

Auth::routes();

//Login Routes

Route::get('/home', 'HomeController@index');

Route::get('/loginOpt', 'LoginOptionsController@index');

Route::get('/docLogin', 'auth\DoctorLoginController@index');

Route::get('/patLogin', 'auth\PatientLoginController@index');

Route::get('/suscribeOpt', 'SuscribeController@index');

Route::get('/doctorSuscribe', 'auth\DoctorRegisterController@index');

Route::get('/patientSuscribe', 'auth\PatientRegisterController@index');

Route::post('/results', 'SearchController@default');

//Search Routes

Route::get('/search_doctor', "SearchDoctorController@default");

Route::get('/search_hospital', "SearchHospitalController@default");

// Route::get('/home', 'HomeController@index');

