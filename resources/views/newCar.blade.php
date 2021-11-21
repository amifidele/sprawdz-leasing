@extends('layout')

@section('content')

<div class="text-center pt-8 text-gray-600">

    <h1 class="text-3xl font-bold">New Car</h1>

</div>

<div class="w-6/12 m-auto pt-6 text-gray-500">

    <form method="post">

        <div class="mt-3">
            <label class="font-medium">Brand *</label>
            <input type="text" class="shadow appearance-none border w-full py-2 px-3 mt-2" name="brand">
        </div>

        <div class="mt-3">
            <label class="font-medium">Model *</label>
            <input type="text" class="shadow appearance-none border w-full py-2 px-3 mt-2" name="model">
        </div>

        <div class="mt-3">
            <label class="font-medium">Engine Type *</label>
            <input type="text" class="shadow appearance-none border w-full py-2 px-3 mt-2" name="engine_type">
        </div>
        
        <div class="mt-3">
            <label class="font-medium">Body Type *</label>
            <input type="text" class="shadow appearance-none border w-full py-2 px-3 mt-2" name="body_type">
        </div>

        <div class="mt-3">
            <label class="font-medium">Version *</label>
            <input type="text" class="shadow appearance-none border w-full py-2 px-3 mt-2" name="version">
        </div>

        <div class="mt-3">
            <label class="font-medium">Phone Number *</label>
            <input type="text" class="shadow appearance-none border w-full py-2 px-3 mt-2" name="phone_number">
        </div>

        <div class="mt-3">
            <label class="font-medium">Email Address *</label>
            <input type="text" class="shadow appearance-none border w-full py-2 px-3 mt-2" name="email">
        </div>

        <div class="mt-3">
            <label class="font-medium">Additional Information</label>
            <textarea name="additional_information" class="shadow appearance-none border w-full  mt-2"></textarea>
        </div>

        <div class="text-center mt-8">
            <button class="bg-green-500 py-3 mx-2 px-12 rounded text-white inline-block">Send</button>
        </div>


    </form>

    <div class="h-36"></div>

</div>


    
@endsection