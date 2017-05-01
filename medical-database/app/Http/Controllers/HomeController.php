<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use resources\views\all_doctors;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {   
        /*$this->middleware('auth');*/
        $this->middleware('guest');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {       

        $search_types = array(
                            
                            1 => array(

                                    'firstName' => 'Nombre',
                                    'lastName' => 'Apellido',
                                    'specialty' => 'Especialidad',
                                    'medical_id' => 'Cédula'
                                ),

                            2 => array(

                                    'name' => 'Nombre',
                                    'city' => 'Ciudad'
                                )
                        );
        

        return view('search', ['search_types' => $search_types]);
    }
}
