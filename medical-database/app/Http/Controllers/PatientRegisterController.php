<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
use DB;

class PatientRegisterController extends Controller
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
            'birthday' => 'required|date',
            'password' => 'required|string|max:20|confirmed',
        ]);
    }

    public function getAgeAttribute()
    {
        return Carbon::parse($this->attributes['birthdate'])->age;
    }

    protected function create(){

        $user = $_POST['username'];
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $birthdate = $_POST['birthdate'];
        $password = $_POST['password'];
        $age = $birthdate->diff(Carbon::now());

        DB::table('doctors')->insert(['user_name'=>$username,
                                    'first_name'=>$name, 
                                    'last_name'=>$lastname,
                                    'password'=>$password,
                                    'birthday'=>$birthday,
                                    'age'=> $age]
        );

        return Redirect::back();
    }

    public function index(){

        return view('patSuscribe');
    }
}
