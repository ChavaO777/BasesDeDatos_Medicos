<?php

namespace App\Http\Controllers;
use App\Hospital;
use DB;

use Illuminate\Http\Request;

class HospitalController extends Controller
{
   public function show($hospital_id) {

		$hospital = Hospital::where('id', $hospital_id)->firstOrFail(); 

		$total_doctors = DB::table('hospitals')
			->select('hospitals.address_id', 'hospitals.id')
			->where('hospitals.id', '=', $hospital_id)
			->join('offices', 'hospitals.id', '=', 'offices.hospital_id')
			->join('doctors_offices', 'offices.id', '=', 'doctors_offices.id')
			->join('doctors', 'doctors.id', '=', 'doctors_offices.id')
			->join('addresses', 'addresses.id', '=', 'offices.address_id')
			->select('doctors.first_name', 'doctors.last_name', 'addresses.id')
			->get();

		$address = DB::table('hospitals')
			->select('hospitals.address_id', 'hospitals.id')
			->where('hospitals.id', '=', $hospital_id)
			->join('addresses', 'hospitals.address_id', '=', 'addresses.id')
			->select('addresses.street', 'addresses.number', 'addresses.suburb')
			->first();

		return view('hospProfile', ['hospital' => $hospital, 'total_doctors' => $total_doctors, 'address' => $address]);
	}

	public function search(){

		return view('busquedaHosp');
	}
}
