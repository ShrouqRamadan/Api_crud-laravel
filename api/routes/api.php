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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::group(['middleware'=>'api'],function(){

Route::get('get-main-categories-apis','\App\Http\Controllers\CategoresController@index');
Route::post('store-main-categories-apis','\App\Http\Controllers\CategoresController@store');
Route::post('update-main-categories-apis/{id}','\App\Http\Controllers\CategoresController@update');
Route::post('delete-main-categories-apis/{id}','\App\Http\Controllers\CategoresController@destroy');


});

