<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewCar;

use Validator;

class NewCarController extends Controller
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
            'brand' => 'required',
            'model' => 'required',
            'engine_type' => 'required',
            'body_type' => 'required',
            'version' => 'nullable',
            'phone_number' => 'required',
            'email' => 'required',
            'additional_information' => 'nullable'
        ]);
        
        $car = new NewCar;
        $car->brand = request('brand');
        $car->model = request('model');
        $car->engine_type = request('engine_type');
        $car->body_type = request('body_type');
        $car->version = request('version');
        $car->phone_number = request('phone_number');
        $car->email = request('email');
        $car->additional_information = request('additional_information');
        $car->save();

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
