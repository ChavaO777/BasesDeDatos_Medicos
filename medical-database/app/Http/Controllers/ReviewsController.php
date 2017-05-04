<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use Auth;
use Illuminate\Support\Facades\Redirect;

class ReviewsController extends Controller
{	
    public function deleteEmailAddress($string){

    	$ans = explode("@", $string);

    	return $ans[0];
    }

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

    	$user_id = Auth::id();

    	$user = DB::table('users')
    				->where('users.id', '=', $user_id)
    				->first();

    	$ans = explode("@", $user->email);
    	$user_username = $ans[0];

    	$patient = DB::table('patients')
    				->where('patients.user_name', '=', $user_username)
    				->first();

    	$date = Carbon::now()->toDateString();

    	DB::table('reviews')->insert([
                'patient_id' => $patient->id,
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

    public function approve(){

    	$review_id = $_POST['review_id']

    	DB::table('reviews')
    		->where('reviews.id', $review_id)
    		->update(['approval' => 1]);

    	return view('LoggedInSearch');
    }

    public function reject(){

    	$review_id = $_POST['review_id'];

    	DB::table('reviews')
    		->where('reviews.id', $review_id)
    		->update(['approval' => -1]);

    	return view('LoggedInSearch');
    }
}
