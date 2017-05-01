<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function searchDoctors(){

    	

    	return view('searchResults');
    }

    public function searchHospitals(){

    	

    	return view('searchResults');
    }
}
