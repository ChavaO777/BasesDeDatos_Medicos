<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SearchController extends Controller
{
    public function searchDoctors(){

		$selectedCriteria = $_POST['option'];
		$lookFor = $_POST['search_text'];

		if($selectedCriteria != 'specialty'){
			$total_doctors = DB::table('doctors')->
						where($selectedCriteria, '=', $lookFor)->get();
		}else{
			$specialty = DB::table('specialties')->
							where('name', '=', $lookFor)->
							select('id')->first();

			$total_doctors = DB::table('doctors')->
							where('doctors.specialty_id', '=', $specialty->id)->get();
		}
		

    	return view('searchResults', ['total_doctors' => $total_doctors, 'flag' => 1]);
    }

    public function searchHospitals(){

    	$selectedCriteria = $_POST['option'];
		$lookFor = $_POST['search_text'];

		if($selectedCriteria == 'name'){
			$total_hospitals = DB::table('hospitals')->
							where($selectedCriteria, '=', $lookFor)->get();
		}else{
			$city = DB::table('cities')->
							where('name', '=', $lookFor)->
							select('id')->first();

			$total_hospitals = DB::table('hospitals')->
							where('hospitals.id', '=', $city->id)->get();
		}
    	
			
		//dd($city_id);
    	return view('searchResults', ['total_hospitals' => $total_hospitals, 'flag' => 2]);
    }
}
