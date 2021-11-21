@extends('layout')

@section('content')

<div class="text-center pt-8 text-gray-600">
    <h1 class="text-3xl font-bold">Insurance</h1>
</div>

<div class="w-6/12 m-auto pt-6  text-gray-500">

    <form method="POST" action="{{ route('store.insurance') }}">
        @csrf
        
            <div class="mt-3">
                <label class="font-medium">Vehicle Type *</label>
                <input type="text" class="shadow appearance-none border w-full py-2 px-3 mt-2" name="vehicle_type">
            </div>

            <div class="mt-3">
                <label class="font-medium">Brand *</label>
                <input type="text" class="shadow appearance-none border w-full py-2 px-3 mt-2" name="brand">
            </div>

            <div class="mt-3">
                <label class="font-medium">Model *</label>
                <input type="text" class="shadow appearance-none border w-full py-2 px-3 mt-2" name="model">
            </div>

            <div class="mt-3">
                <label class="font-medium">Version </label>
                <input type="text" class="shadow appearance-none border w-full py-2 px-3 mt-2" name="version">
            </div>

            <div class="mt-3">
                <label class="font-medium">Engine Type *</label>
                <input type="text" class="shadow appearance-none border w-full py-2 px-3 mt-2" name="engine_type">
            </div>

            <div class="mt-3">
                <label class="font-medium">Power (in KM) *</label>
                <input type="text" class="shadow appearance-none border w-full py-2 px-3 mt-2" name="power">
            </div>

            <div class="mt-3">
                <label class="font-medium">Body type *</label>
                <input type="text" class="shadow appearance-none border w-full py-2 px-3 mt-2" name="body_type">
            </div>
            
            <div class="mt-3">
                <label class="font-medium">VIN Number*</label>
                <input type="text" class="shadow appearance-none border w-full py-2 px-3 mt-2" name="vin_number">
            </div>
            
            <div class="mt-3">
                <label class="font-medium">Vehicle Value (net)*</label>
                <input type="text" class="shadow appearance-none border w-full py-2 px-3 mt-2" name="vehicle_value">
            </div>

            <div class="mt-3">
                <label class="font-medium">Vehicle Financing *</label>
                <input type="text" class="shadow appearance-none border w-full py-2 px-3 mt-2" name="vehicle_financing">
            </div>

            <div class="mt-3">
                <label class="font-medium">Year of production *</label>
                <input type="text" class="shadow appearance-none border w-full py-2 px-3 mt-2" name="year_of_production">
            </div>

            <div class="mt-3">
                <label class="font-medium">First Registration Date *</label>
                <input type="date" class="shadow appearance-none border w-full py-2 px-3 mt-2" name="first_registration_date">
            </div>

            <div class="mt-3">
                <label class="font-medium">Vehicle Mileage *</label>
                <input type="text" class="shadow appearance-none border w-full py-2 px-3 mt-2" name="vehicle_milieage">
            </div>

            <div class="mt-3">
                <label class="font-medium">Postal Code of the place of Registration  *</label>
                <input type="text" class="shadow appearance-none border w-full py-2 px-3 mt-2" name="registration_postal_code">
            </div>

            <div class="mt-3">
                <label class="font-medium">Vehicle Parking Place *</label>
                <input type="text" class="shadow appearance-none border w-full py-2 px-3 mt-2" name="vehicle_parking_place">
            </div>

            <div class="mt-3">
                <label class="font-medium">Driving Licence Issue Date *</label>
                <input type="date" class="shadow appearance-none border w-full py-2 px-3 mt-2" name="driving_licence_issue_date">
            </div>

            <div class="mt-3">
                <label class="font-medium">First Name & Last Name *</label>
                <input type="text" class="shadow appearance-none border w-full py-2 px-3 mt-2" name="full_names">
            </div>

            <div class="mt-3">
                <label class="font-medium">Pesel Number</label>
                <input type="text" class="shadow appearance-none border w-full py-2 px-3 mt-2" name="pesel_number">
            </div>

            <div class="mt-3">
                <label class="font-medium">Number Nip</label>
                <input type="text" class="shadow appearance-none border w-full py-2 px-3 mt-2" name="number_nip">
            </div>

            <div class="mt-3">
                <label class="font-medium">Phone Number*</label>
                <input type="text" class="shadow appearance-none border w-full py-2 px-3 mt-2" name="phone_number">
            </div>

            <div class="mt-3">
                <label class="font-medium">Email *</label>
                <input type="text" class="shadow appearance-none border w-full py-2 px-3 mt-2" name="email">
            </div>

            <div class="mt-3">
                <label class="font-medium">Company Address *</label>
                <input type="text" class="shadow appearance-none border w-full py-2 px-3 mt-2" name="company_address">
            </div>

            <div class="text-center mt-8">
                <button class="bg-green-500 py-3 mx-2 px-12 rounded text-white inline-block">Send</button>
            </div>

    </form>


    <div class="h-24"></div>

</div>


@endsection