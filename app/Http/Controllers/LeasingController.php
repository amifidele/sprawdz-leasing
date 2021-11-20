<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Leasing;

use Validator;

use Illuminate\Support\Facades\Redirect;

class LeasingController extends Controller
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
    public function storeCalculator(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'objective' => 'required',
            'item_name' => 'required',
            'financing_type' => 'required',
            'item_price' => 'required',
            'production_date' => 'required',
            'self_deposit' => 'nullable',
            'number_of_installment' => 'required',
            'redemption_value' => 'nullable',
            'most_caring' => 'nullable',
            'company_tax_id' => 'nullable',
            'phone_number' => 'required',
            'email' => 'required',
            'additional_information' => 'nullable',
        ]);
        
        $l_calculator = new Leasing;
        $l_calculator->objective = $request->input('objective');
        $l_calculator->item_name = $request->input('item_name');
        $l_calculator->financing_type = $request->input('financing_type');
        $l_calculator->item_price = $request->input('item_price');
        $l_calculator->production_date = $request->input('production_date');
        $l_calculator->self_deposit = $request->input('self_deposit');
        $l_calculator->number_of_installment = $request->input('number_of_installment');
        $l_calculator->redemption_value = $request->input('redemption_value');
        $l_calculator->most_caring = $request->input('most_caring');
        $l_calculator->company_tax_id = $request->input('company_tax_id');
        $l_calculator->phone_number = $request->input('phone_number');
        $l_calculator->email = $request->input('email');
        $l_calculator->additional_information = $request->input('additional_information');
        $l_calculator->save();

        return redirect('/success-calculator');

        
        
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
