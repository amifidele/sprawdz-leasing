<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Insurance;

use Validator;

class InsuranceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'vehicle_type' => 'required',
            'brand' => 'required',
            'model' => 'required',
            'version' => 'nullable',
            'engine_type' => 'required',
            'power' => 'required',
            'body_type' => 'required',
            'vin_number' => 'required',
            'vehicle_financing' => 'required',
            'year_of_production' => 'required',
            'first_registration_date' => 'required',
            'vehicle_mileage' => 'required',
            'registration_postal_code' => 'required',
            'vehicle_parking_place' => 'required',
            'driving_licence_issue_date' => 'required',
            'full_names'=> 'required',
            'email' => 'required',
            'pesel_number' => 'nullable',
            'number_nip' => 'nullable',
            'phone_number' => 'required',
            'company_address' => 'required'
        ]);
        
        $insurance = new Insurance;
        $insurance->vehicle_type = request('vehicle');
        $insurance->brand = request('brand');
        $insurance->model = request('model');
        $insurance->version = request('version');
        $insurance->engine_type = request('engine_type');
        $insurance->power = request('power');
        $insurance->body_type = request('body_type');
        $insurance->vin_number = request('vin_number');
        $insurance->vehicle_value = request('vehicle_value');
        $insurance->vehicle_financing = request('vehicle_financing');
        $insurance->year_of_production = request('year_of_production');
        $insurance->first_registration_date = request('first_registration_date');
        $insurance->vehicle_mileage = request('vehicle_mileage');
        $insurance->registration_postal_code = request('registration_postal_code');
        $insurance->vehicle_parking_place = request('vehicle_parking_place');
        $insurance->driving_license_issue_date = request('driving_license_issue_date');
        $insurance->full_names = request('full_names');
        $insurance->email = request('email');
        $insurance->pesel_number = request('pesel_number');
        $insurance->number_nip = request('number_nip');
        $insurance->phone_number =  request('phone_number');
        $insurance->company_address = request('company_address');
        $insurance->save();


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
