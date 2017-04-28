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

Route::get('/show_doctor/{doctor_id}', "DoctorController@show");

Route::get('/show_hospital/{hospital_id}', "HospitalController@show");

Route::get('/search_hospital/', "HospitalController@search");

Auth::routes();

Route::get('/home', 'HomeController@index');
