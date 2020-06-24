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

Route::get('/', function () {
    return view('home');
});

// Route::resource('furniture', 'FurnitureController');


//owner
Route::get('/admin', 'OwnerController@authentication'); //authentication page
Route::get('/admin/dashboard', 'OwnerController@dashboard'); //dashboard 
Route::get('/admin/dashboard/upgrade-store', 'OwnerController@upgradestore'); //create-new-furniture
Route::post('/admin/dashboard/', 'OwnerController@store'); //save new furniture
Route::get('/admin/dashboard/{furniture}', 'OwnerController@destroy'); //delete-furniture

//customer
Route::get('/customer', 'CustomerController@index');
Route::post('/customer/placement', 'CustomerController@paxCounter');
