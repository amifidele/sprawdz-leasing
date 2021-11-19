@extends('layout')

    @section('content')
    <div class="w-100">

        <div class="flex ">

            <div class="flex-1 pl-12 pt-28 text-gray-800">

                <div class="">
                    <h1 class="text-5xl pt-1 font-bold">The best</h1>
                    <h1 class="text-4xl pt-2 text-green-500 font-bold">Leasing Comparison</h1>
                    <h1 class="text-4xl pt-2 font-bold">Available on the market</h1>
                </div>

                <div class="mt-8">
                    <a href="{{ route('leasing.calculator') }}">
                    <button class="bg-green-500 py-2 px-4 rounded text-white inline-block ">Leasing Calculator</button>
                    </a>
                    <a href="{{ route('compare.offers') }}">
                    <button class="bg-green-500 py-2 mx-2 px-4 rounded text-white inline-block">Compare Offers</button>
                    </a>
                </div>

            </div>

            <div class="flex-1">

            </div>

        </div>
        
    </div>

    @endsection