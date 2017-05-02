<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SearchController extends Controller
{
    public function searchDoctors(){

		$selectedCriteria = $_POST['option'];
		$lookFor = $_POST['search_text'];

		$total_doctors = DB::table('doctors')->
						where($selectedCriteria, '=', $lookFor)->get();

    	return view('searchResults', ['total_doctors' => $total_doctors, 'flag' => 1]);
    }

    public function searchHospitals(){

    	$selectedCriteria = $_POST['option'];
		$lookFor = $_POST['search_text'];
    	
		$total_hospitals = DB::table('hospitals')->
						where($selectedCriteria, '=', $lookFor)->get();

    	return view('searchResults', ['total_hospitals' => $total_hospitals, 'flag' => 2]);
    }
}
