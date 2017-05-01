<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchHospitalController extends Controller
{
    public function default(){

    	return view('search_hospitals');
    }
}
