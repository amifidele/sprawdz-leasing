<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<title>Sprawdz Leasing</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body>

    <div class="w-100 pr-12 shadow pl-12 bg-white py-4 flex flex-wrap ">
 
        <div class="flex-1 pt-2">

            <img class="w-28" src="{{ asset('images/cropped-Logo@4x.png') }}">

        </div>

        <div class="flex-1 py-2 bg-white text-right text-gray-600">

            <ul class="list inline-block text-sm">
                <li class="mx-2 inline-block">Leasing Comparisson</li>
                <li class="mx-2 inline-block">Leasing Calculator</li>
                <li class="mx-2 inline-block">Knowledge Zone</li>
                <li class="mx-3 inline-block">
                    <button class="bg-green-500 py-2 px-4 rounded text-white">
                        +48 32 724 77 47
                    </button>
                </li>
            </ul>

        </div>

    </div>


    @yield('content')


    {{-- <h1 class="text-xl font-bold">My first line of code</h1> --}}


</body>


</html>
