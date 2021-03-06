<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Leasing;

use Validator;

use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Facades\Mail;

use App\Mail\LeaseCalculatorSent;
use App\Mail\LeaseCalculatorSubmitted;

use App\Mail\LeaseComparisonSent;
use App\Mail\LeaseComparisonSubmitted;



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
        
        $leasing = new Leasing;
        $leasing->objective = $request->input('objective');
        $leasing->item_name = $request->input('item_name');
        $leasing->financing_type = $request->input('financing_type');
        $leasing->item_price = $request->input('item_price');
        $leasing->production_date = $request->input('production_date');
        $leasing->self_deposit = $request->input('self_deposit');
        $leasing->number_of_installment = $request->input('number_of_installment');
        $leasing->redemption_value = $request->input('redemption_value');
        $leasing->most_caring = $request->input('most_caring');
        $leasing->company_tax_id = $request->input('company_tax_id');
        $leasing->phone_number = $request->input('phone_number');
        $leasing->email = $request->input('email');
        $leasing->additional_information = $request->input('additional_information');
        $leasing->save();

        Mail::send(new LeaseCalculatorSent($leasing));
        Mail::send(new LeaseCalculatorSubmitted($leasing));


        return redirect('/success-calculator');

    }


    public function storeComparison(Request $request)
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
        
        $leasing = new Leasing;
        $leasing->objective = $request->input('objective');
        $leasing->item_name = $request->input('item_name');
        $leasing->financing_type = $request->input('financing_type');
        $leasing->item_price = $request->input('item_price');
        $leasing->production_date = $request->input('production_date');
        $leasing->self_deposit = $request->input('self_deposit');
        $leasing->number_of_installment = $request->input('number_of_installment');
        $leasing->redemption_value = $request->input('redemption_value');
        $leasing->most_caring = $request->input('most_caring');
        $leasing->company_tax_id = $request->input('company_tax_id');
        $leasing->phone_number = $request->input('phone_number');
        $leasing->email = $request->input('email');
        $leasing->additional_information = $request->input('additional_information');
        $leasing->save();

        Mail::send(new LeaseComparisonSent($leasing));
        Mail::send(new LeaseComparisonSubmitted($leasing));

        return redirect('/success-comparison');

        
        
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
