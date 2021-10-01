<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
    
});
//
Route::get('supermercado','App\Http\Controllers\API\supermercadoController@index')
;
//
Route::get('supermercado/{supermercado}','App\Http\Controllers\API\supermercadoController@show')
;
//
Route::post('supermercado','App\Http\Controllers\API\supermercadoController@store')
;
//
Route::delete('supermercado/{supermercado}','App\Http\Controllers\API\supermercadoController@destroy')
;
//
Route::put('supermercado/{supermercado}','App\Http\Controllers\API\supermercadoController@update')
;


