<?php

use App\Doctor;
use Illuminate\Http\Request;

/**
 * Display All Tasks
 */
Route::get('/', function () {
    //
    return view('all_doctors');
});

/**
 * Add A New Task
 */
Route::post('/', function (Request $request) {
    //
});

/**
 * Delete An Existing Task
 */
Route::delete('/task/{id}', function ($id) {
    //
});