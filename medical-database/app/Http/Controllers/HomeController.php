<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use resources\views\all_doctors;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {   
        $this->middleware('auth');
        /*$this->middleware('guest');*/
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {       
        if(Auth::guest())
            return view('search');
        else
            return view('LoggedInSearch');
    }

    public function writeReview(){

        return view('writeReview');
    }
}
