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



/*
Route::get('/resourceName',                 'ControllerName@index');
Route::get('/resourceName/{resource}',      'ControllerName@show');
Route::get('/resourceName/create',          'ControllerName@create');
Route::get('/resourceName/{resource}/edit', 'ControllerName@edit');
Route::post('/resourceName',                'ControllerName@store');
Route::put('/resourceName/{resource}',      'ControllerName@update');
Route::delete('/resourceName/{resource}',   'ControllerName@destroy');




*/

Route::get('/', 'HomeController@index');
//Route::get('/device', 'DeviceController@index');
//Route::get('/sensor', 'SensorController@index');
//Route::get('/sensor/{id}', 'SensorController@show');
//Route::resource('crud','CrudsController');
Auth::routes();

Auth::routes();

