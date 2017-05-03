<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoggedInController extends Controller
{
    //

    public function index(){

    	return view('LoggedInSearch'); 
    }
}
