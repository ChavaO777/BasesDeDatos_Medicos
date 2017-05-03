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
		
        $total_doctor_reviews = Review::where('doctor_id', $doctor_id)
        						->join('patients', 'reviews.patient_id', '=', 'patients.id')
        						->select('patients.first_name', 'patients.last_name', 'reviews.text', 'reviews.rating', 'reviews.date')->get();
			
		$doctor_specialty = Specialty::where('id', $doctor->specialty_id)->firstOrFail();

		$current_user_id = Auth::id();

		return view('docProfile', ['doctor' => $doctor , 'total_doctor_reviews' => $total_doctor_reviews, 'specialty' => $doctor_specialty, 'current_user_id' => $current_user_id]);
    }
}
