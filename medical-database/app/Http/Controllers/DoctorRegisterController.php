<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Database\Seeder;
use Hash;

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

    	$name = $_POST['name'];
    	$lastname = $_POST['lastname'];
    	$medical_id = $_POST['medical_id'];
    	$specialty = $_POST['specialty'];

    	DB::beginTransaction();
    	$specialty = DB::table('specialties')->
    		where('name', '=', $specialty)->select('id')->first();

    	if($specialty == null) {
            DB::rollback();
            return Redirect::back();
        }

    	$password = $_POST['password'];
    	$consultation_cost = $_POST['consultation_cost'];

    	try{
            DB::table('doctors')->insert(['first_name'=>$name,
                    'last_name'=>$lastname,
                    'medical_id'=>$medical_id,
                    'specialty_id'=>$specialty->id,
                    'password'=>$password,
                    'consultation_cost' => $consultation_cost]
            );
        }
        catch(\Exception $e) {
    	    DB::rollback();
            return Redirect::back();
        }
        
        $hashed_password = Hash::make($password);

        DB::table('users')->insert([
                'name' => ($name . ' ' . $lastname),
                'email' => $medical_id . '@mail.com',
                'password' => $hashed_password,
                'remember_token' => $password,
            ]);
        DB::commit();

    	return view('auth.login');
    }

    public function index(){

    	return view('docSuscribe');
    }
}
