<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
use DB;
use Hash;

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

    protected function create()
    {

        $user = $_POST['username'];
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $birthdate = $_POST['birthdate'];
        $password = $_POST['password'];
        
        $dateNow = Carbon::now();
        $dt = Carbon::parse($birthdate);

        $age = $dt->diffInYears($dateNow);
        
        DB::table('patients')->insert(['user_name'=>$user,
                                    'first_name'=>$name, 
                                    'last_name'=>$lastname,
                                    'password'=>$password,
                                    'birthdate'=>$birthdate,
                                    'age'=> $age]
        );

        $hashed_password = Hash::make($password);

        DB::table('users')->insert([
                'name' => ($name . ' ' . $lastname),
                'email' => $user . '@mail.com',
                'password' => $hashed_password,
                'remember_token' => $password,
            ]);

        return redirect('/');
    }

    public function index(){

        return view('patSuscribe');
    }
}
