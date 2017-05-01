<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchDoctorController extends Controller
{

    public function index(){

    	return view('search_doctors');
    }

    public function search($request){

		return view('searchResults', request);	
    }
}
