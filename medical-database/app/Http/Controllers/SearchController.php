<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search($request){

    	if($request->'model' == 'doctor')
    		return searchDoctor($request);

    	return searchHospital($request);
    }

    public function searchDoctor($request){

    	@php
		switch($request->'attribute_name') {
		    case 'doctorName':
		        return searchDoctorByName($request);
		      
		    case 'doctorLastName':
		    	return searchDoctorByLastName($request);

		    case 'doctorMedicalID':
		    	return searchDoctorByMedicalID($request);
		      
		    default:
		        return searchDoctorBySpecialty($request);
		}
		@endphp
    }

    public function searchDoctorByName($request){


    }

    public function searchDoctorByLastName($request){

    	
    }

    public function searchDoctorByMedicalID($request){

    	
    }

    public function searchDoctorBySpecialty($request){

    	
    }

    public function searchHospital($request){

    	@php
		switch($request->'attribute_name') {
		    case 'hospitalName':
		        return searchHospitalByName($request);
		      
		    default:
		        return searchHospitalByLocation($request);
		}
		@endphp
    }

    public function searchHospitalByName($request){

    	
    }

    public function searchHospitalByLocation($request){

    	
    }
}
