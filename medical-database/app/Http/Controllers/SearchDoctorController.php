<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchDoctorController extends Controller
{
    public function default(){

    	return view('search_doctors');
    }

    public function search(){

    	return view('search_results');
    	
    }
}
