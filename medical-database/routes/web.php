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

Route::get('/search_hospital/', "HospitalController@search");

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/loginOpt', 'LoginOptionsController@index');

Route::get('/docLogin', 'DoctorLoginController@index');

Route::get('/patLogin', 'PatientLoginController@index');

Route::get('/suscribeOpt', 'SuscribeController@index');

Route::get('/doctorSuscribe', 'auth\DoctorRegisterController@index');

Route::get('/patientSuscribe', 'auth\PatientRegisterController@index');

<<<<<<< HEAD
Route::post('/results', 'SearchController@default');
=======
Route::get('/searching', 'SearchResultsController@index');
>>>>>>> db6c65991db71209fae6313cf2259d65521430e7

// Route::get('/home', 'HomeController@index');

