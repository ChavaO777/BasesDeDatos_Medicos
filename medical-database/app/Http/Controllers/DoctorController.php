<?php

namespace App\Http\Controllers;
use App\Doctor;
use App\Review;
use App\Specialty;

use Illuminate\Http\Request;

class DoctorController extends Controller
{		
	
    public function show(){

        $doctor_id = $_POST['doctor_id'];

		$doctor = Doctor::where('id', $doctor_id)->firstOrFail(); 
		$total_doctor_reviews = Review::where('doctor_id', $doctor_id);
			
		$doctor_specialty = Specialty::where('id', $doctor->specialty_id)->firstOrFail();

		return view('docProfile', ['doctor' => $doctor , 'total_doctor_reviews' => $total_doctor_reviews, 'specialty' => $doctor_specialty]);
    }
}
