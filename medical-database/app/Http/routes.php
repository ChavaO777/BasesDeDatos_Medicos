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
Route::post('/hola', function (Request $request) {
    //
    return "HOLA A TODOS";
});

/**
 * Delete An Existing Task
 */
Route::delete('/task/{id}', function ($id) {
    //
});