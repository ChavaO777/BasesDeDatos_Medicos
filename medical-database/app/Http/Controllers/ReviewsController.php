<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use Auth;
use Illuminate\Support\Facades\Redirect;

class ReviewsController extends Controller
{
    public function create(){

    	$first_name = $_POST['first_name'];
    	$last_name = $_POST['last_name'];
    	$rating = $_POST['rating'];
    	$text = $_POST['text'];
    	$consultation_cost = $_POST['consultation_cost'];

    	$doctor = DB::table('doctors')
    				->where('doctors.first_name', '=', $first_name)
    				->where('doctors.last_name', '=', $last_name)
    				->select('doctors.id')
    				->first();

    	if($doctor == null)
    		return view('LoggedInSearch');

    	$patient_id = Auth::id();
    	$date = Carbon::now()->toDateString();

    	DB::table('reviews')->insert([
                'patient_id' => $patient_id,
               	'doctor_id' => $doctor->id,
               	'date' => $date,
               	'rating' => $rating,
               	'text' => $text,
               	'reply' => ' ',
               	'approval' => 0,
            	'consultation_cost' => $consultation_cost
            ]); 

    	return view('LoggedInSearch');
    	// return Redirect::back();
    }
}
