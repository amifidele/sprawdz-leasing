<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'App\Http\Controllers\PagesController@index')->name('home');

Route::get('/leasing-calculator', 'App\Http\Controllers\PagesController@leasingCalculator')->name('leasing.calculator');

Route::get('/compare-offers', 'App\Http\Controllers\PagesController@compareOffers')->name('compare.offers');
