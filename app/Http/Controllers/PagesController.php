<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    
    public function index() {

        return view('app');

    }

    public function leasingCalculator(){

        return view('leasingCalculator');
    }

    public function compareOffers(){

        return view('compareOffers');

    }

    public function succcessCalculator(){
        return view('successCalculator');
    }

    public function succcessComparison(){
        return view('successComparisson');
    }

}
