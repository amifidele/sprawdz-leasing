@extends('layout')

    @section('content')
    <div class="w-100">
        <div class="absolute z-0 h-full" style="height: 450px">
            <img class="bg-container" 
            style="
            width: 100%;
            height: 100%;
            -o-object-fit: cover !important;
            object-fit: cover !important;"
            src="{{ asset('images/AdobeStock_252883460-scaled.jpeg') }}">
        </div>

        <div class="flex w-100 relative z-1">

            <div class="flex-1 pl-12 pt-28 text-gray-800">

                <div class="">
                    <h1 class="text-4xl pt-1 font-bold">The best</h1>
                    <h1 class="text-4xl pt-2 text-green-500 font-bold">Leasing Comparison</h1>
                    <h1 class="text-4xl pt-2 font-bold">Available on the market</h1>
                </div>

                <div class="mt-8">
                    <a href="{{ route('leasing.calculator') }}">
                    <button class="bg-green-500 py-2 px-4 rounded text-white inline-block ">Leasing Calculator</button>
                    </a>
                    <a href="{{ route('compare.offers') }}">
                    <button class="bg-green-500 py-2 mx-2 px-6 rounded text-white inline-block">Compare Offers</button>
                    </a>
                </div>

            </div>

            <div class="flex-1">

            </div>

        </div>

        <div class="">

        </div>
        
    </div>

    @endsection