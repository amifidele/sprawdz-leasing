@extends('layout')

@section('content')

    <div class="text-center pt-8 text-gray-600">

        <h1 class="text-3xl font-bold">Leasing Calculator</h1>

    </div>


        <div class="w-6/12 m-auto mt-8 text-gray-500">
            <form>

            <div class="">
                <label class="font-medium">Select the item you want to lease : *</label>
                <select class="shadow appearance-none border w-full py-2 px-3 mt-2">
                    <option>Car</option>
                    <option>Vans & Truck</option>
                    <option>Specialist Vehicles</option>
                    <option>Machine</option>
                    <option>IT equipment</option>
                </select>

            </div>
            <div class="mt-3">
                <label class="font-medium">Type of Financing : *</label>
                <select class="shadow appearance-none border w-full py-2 px-3 mt-2">
                    <option>Operational Leasing</option>
                    <option>Financial Leasing</option>
                    <option>Leasing Loan</option>
                    <option>Long-term Lease</option>
                </select>

            </div>

            <div class="mt-3 flex">
                <div class="flex-1 mr-2">
                    <label class="font-medium">Item price (net)  *</label>
                    <input type="number" class="shadow appearance-none border w-full py-2 px-3 mt-2" placeholder="">
                </div>

                <div class="flex-1 ml-2">
                    <label class="font-medium">Year of production  *</label>
                    <input type="number" class="shadow appearance-none border w-full py-2 px-3 mt-2" placeholder="">
                </div>

            </div>

            <div class="mt-3">
                <label class="font-medium">Self Deposit : *</label>
                <input type="range" min="1" max="45" value="20"  class=" border w-full mt-2">
                
                <output for="redemption" name="x" oninput="x.value=parseInt(redemption.value)">00</output>

            </div>

            <div class="mt-3">
                <label class="font-medium">Number of Installments : *</label>
                <select class="shadow appearance-none border w-full py-2 px-3 mt-2">
                    <option>24</option>
                    <option>35</option>
                    <option>36</option>
                    <option>47</option>
                    <option>48</option>
                    <option>59</option>
                    <option>60</option>
                </select>

            </div>

            <div class="mt-3">
                <label class="font-medium">Redemption Value : *</label>
                <input type="range" min="1" max="50" value="20" id="redemption" class=" border w-full mt-2">
                <output for="redemption" name="x" oninput="x.value=parseInt(redemption.value)">00</output>

            </div>

            <div class="mt-3">
                <label class="font-medium">What do you care about most?</label>
                <select class="shadow appearance-none border w-full py-2 px-3 mt-2">
                    <option>Low cost of leasing</option>
                    <option>Low Monthly Installments</option>
                    <option>Low own contribution</option>
                </select>

            </div>

            <div class="mt-3">
                <label class="font-medium">Company tax identification number *</label>
                <input type="text" class="shadow appearance-none border w-full py-2 px-3 mt-2">

            </div>

            <div class="mt-3">
                <label class="font-medium">Phone Number *</label>
                <input type="text" class="shadow appearance-none border w-full py-2 px-3 mt-2">

            </div>

            <div class="mt-3">
                <label class="font-medium">Your Email Address *</label>
                <input type="text" class="shadow appearance-none border w-full py-2 px-3 mt-2">

            </div>

            <div class="mt-3">
                <label class="font-medium">Additional Information</label>
                <textarea type="text" class="shadow appearance-none border w-full py-2 px-3 mt-2"></textarea>

            </div>

            <div class="text-center mt-8">
                <button class="bg-green-500 py-3 mx-2 px-6 rounded text-white inline-block">Calculate the leasing Installment</button>
            </div>


            </form>


            
            
        </div>

        <div class="h-48"></div>

    

@endsection