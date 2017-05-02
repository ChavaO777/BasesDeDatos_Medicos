<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;

class DoctorRegisterController extends Controller
{

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:50',
            'lastname' => 'required|string|max:50',
            'professionalID' => 'required|string|max:20',
            'specialty' => 'required|string|max:20|unique:users',
            'password' => 'required|string|max:20|confirmed',
        ]);
    }

    protected function create(){

    	/*$doctor = new Doctor;


    	$name = $_POST['name'];
    	$lastname = $_POST['lastname'];
    	$medical_id = $_POST['medical_id'];
    	$specialty = $_POST['specialty'];
    	$password = $_POST['password'];

    	$doctor->first_name = $name;
    	$doctor->last_name = $lastname;
    	$doctor->medical_id = $medical_id;
    	$doctor->specialty = $specialty;
    	$doctor->password = $password;

    	return Redirect::back();*/

    	$name = $_POST['name'];
    	$lastname = $_POST['lastname'];
    	$medical_id = $_POST['medical_id'];
    	$specialty = $_POST['specialty'];

    	$specialty_id = DB::table('specialties')->
    		where('name', '=', $specialty) -> select('id')->fistOrFail();
    	
    	$password = $_POST['password'];
    	$consultation_cost = $_POST['consultation_cost'];

    	DB::table('doctors')->insert(['first_name'=>$name, 
									'last_name'=>$lastname,
									'medical_id'=>$medical_id,
									'specialty_id'=>$specialty_id,
									'password'=>$password,
									'consultation_cost' => $consultation_cost]
    	);

    	return Redirect::back();
    }

    public function index(){

    	return view('docSuscribe');
    }
}
