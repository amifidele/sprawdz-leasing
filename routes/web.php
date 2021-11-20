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

Route::post('/leasing-calculator', 'App\Http\Controllers\LeasingController@storeCalculator')->name('store.leasing.calculator');

Route::post('/leasing-comparison', 'App\Http\Controllers\LeasingController@storeComparison')->name('store.leasing.comparison');

Route::get('/success-calculator', 'App\Http\Controllers\PagesController@succcessCalculator')->name('success.calculator');

Route::get('/success-comparison', 'App\Http\Controllers\PagesController@succcessComparison')->name('success.comparison');

Route::get('/compare-offers', 'App\Http\Controllers\PagesController@compareOffers')->name('compare.offers');

