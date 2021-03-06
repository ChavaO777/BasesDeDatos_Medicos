<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

class ProfileController extends Controller
{
    public function doctorProfile(){

    	return view('docProfile');
    }

    public function my_profile(){
        $user_id = Auth::id();

        $user = DB::table('users')
            ->where('users.id', '=', $user_id)
            ->first();

        $ans = explode("@", $user->email);
        $doctor_medical_id = $ans[0];


        $doctor = DB::table('doctors')->where('medical_id', $doctor_medical_id)->first();

        $total_doctor_reviews = DB::table('reviews')->where('doctor_id', $doctor->id)
            ->join('patients', 'reviews.patient_id', '=', 'patients.id')
            ->select('patients.first_name', 'patients.last_name', 'reviews.text', 'reviews.rating', 'reviews.date', 'reviews.approval', 'reviews.id')->get();

        $doctor_specialty = DB::table('specialties')->where('id', $doctor->specialty_id)->first();

        $current_user_id = Auth::id();
        $doctor_medical_id = $doctor->medical_id;
        $doctor_fake_mail = $doctor_medical_id . '@mail.com';

        $doctor_user = DB::table('users')
            ->where('users.email', '=', $doctor_fake_mail)
            ->select('id')
            ->first();

        $isThisDoctor = -1;

        if($doctor_user != null and $doctor_user->id == $current_user_id)
            $isThisDoctor = 1;

        else
            $isThisDoctor = 0;

        return view('docProfile', ['doctor' => $doctor , 'total_doctor_reviews' => $total_doctor_reviews, 'specialty' => $doctor_specialty, 'current_user_id' => $current_user_id, 'isThisDoctor' => $isThisDoctor]);
    }
}
