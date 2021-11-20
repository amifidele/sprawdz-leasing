@extends('layout')

@section('content')

    <div class="text-center pt-8 text-gray-600">

        <h1 class="text-3xl font-bold">Leasing Calculator</h1>

    </div>


        <div class="w-6/12 m-auto mt-8 text-gray-500">
            <form method="POST" action="{{ route('store.leasing.calculator') }}" 
            oninput="x_redemption.value=parseInt(redemption.value), x_deposit.value=parseInt(deposit.value)">

            @csrf

            <input type="hidden" name="objective" value="leasing_calculator">

            <div class="">
                <label class="font-medium">Select the item you want to lease : *</label>
                <select class="shadow appearance-none border w-full py-2 px-3 mt-2" name="item_name">
                    <option value="Car Passenger">Car Passenger</option>
                    <option value="Cars Vans & Truck">Cars Vans & Truck</option>
                    <option value="Specialist Vehicles">Specialist Vehicles</option>
                    <option value="Machine">Machine</option>
                    <option value="IT equipment">IT equipment</option>
                    <option value="Tractor Semitrailer">Tractor Semitrailer</option>
                    <option value="Agriculture Equipment">Agriculture Equipment</option>
                    <option value="Quad Motorcycle">Quad Motorcycle</option>
                    <option value="Photovoltaics">Photovoltaics </option>
                    <option value="Real Estate">Real Estate </option>
                </select>

            </div>
            <div class="mt-3">
                <label class="font-medium">Type of Financing : *</label>
                <select class="shadow appearance-none border w-full py-2 px-3 mt-2" name="financing_type">
                    <option value="Operational Leasing">Operational Leasing</option>
                    <option value="Financial Leasing">Financial Leasing</option>
                    <option value="Leasing Loan">Leasing Loan</option>
                    <option value="Long-term Lease">Long-term Lease</option>
                </select>

            </div>

            <div class="mt-3 flex">
                <div class="flex-1 mr-2">
                    <label class="font-medium">Item price (net)  *</label>
                    <input type="number" class="shadow appearance-none border w-full py-2 px-3 mt-2" name="item_price">
                </div>

                <div class="flex-1 ml-2">
                    <label class="font-medium">Year of production  *</label>
                    <input type="number" class="shadow appearance-none border w-full py-2 px-3 mt-2" name="production_date">
                </div>

            </div>

            <div class="mt-3">
                <label class="font-medium">Self Deposit  (%): *</label>
            <input type="range" min="1" max="45" id="deposit" class=" border w-full mt-2" name="self_deposit">
                <output for="deposit" name="x_deposit"></output>
                
                {{-- <output for="redemption" name="x" oninput="x.value=parseInt(redemption.value)">00</output> --}}

            </div>

            <div class="mt-3">
                <label class="font-medium">Number of Installments : *</label>
                <select class="shadow appearance-none border w-full py-2 px-3 mt-2" name="number_of_installment">
                    <option value="24">24</option>
                    <option value="35">35</option>
                    <option value="36">36</option>
                    <option value="47">47</option>
                    <option value="48">48</option>
                    <option value="59">59</option>
                    <option value="60">60</option>
                </select>

            </div>

            <div class="mt-3">
                <label class="font-medium">Redemption Value (%) : *</label>
                <input type="range" min="1" max="50"  id="redemption" class=" border w-full mt-2" name="redemption_value">
                <output for="redemption" name="x_redemption" ></output>

            </div>

            <div class="mt-3">
                <label class="font-medium">What do you care about most?</label>
                <select class="shadow appearance-none border w-full py-2 px-3 mt-2" name="most_caring">
                    <option value="Low cost of leasing">Low cost of leasing</option>
                    <option value="Low Monthly Installments">Low Monthly Installments</option>
                    <option value="Low own contribution">Low own contribution</option>
                </select>

            </div>

            <div class="mt-3">
                <label class="font-medium">Company tax identification number *</label>
                <input type="text" class="shadow appearance-none border w-full py-2 px-3 mt-2" name="company_tax_id">

            </div>

            <div class="mt-3">
                <label class="font-medium">Phone Number *</label>
                <input type="text" class="shadow appearance-none border w-full py-2 px-3 mt-2" name="phone_number">

            </div>

            <div class="mt-3">
                <label class="font-medium">Your Email Address *</label>
                <input type="text" class="shadow appearance-none border w-full py-2 px-3 mt-2" name="email">

            </div>

            <div class="mt-3">
                <label class="font-medium">Additional Information</label>
                <textarea type="text" class="shadow appearance-none border w-full py-2 px-3 mt-2" name="additional_information"></textarea>

            </div>

            <div class="text-center mt-8">
                <button class="bg-green-500 py-3 mx-2 px-6 rounded text-white inline-block">Calculate the leasing Installment</button>
            </div>


            </form>


            
            
        </div>

        <div class="h-48"></div>

    

@endsection