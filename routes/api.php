<?php

use Illuminate\Http\Request;
use Illuminate\Http\Response;
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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::get('/', function () {
    return response()->json(['success' => true], Response::HTTP_OK);
});

Route::group([
    'prefix' => '/auth'
], function ($router) {
    Route::post('/token', 'AuthController@login');
    Route::delete('/token', 'AuthController@logout');
    Route::get('/user', 'AuthController@me');
});

Route::group([
    'prefix' => '/register'
], function ($router) {
    Route::get('/', 'RegisterController@getAll');
    Route::get('/school/{school}', 'RegisterController@getBySchool');
    Route::get('/school/{school}/student/{student_id}', 'RegisterController@getByStudent');
    Route::get('/school/{school}/class/{class}', 'RegisterController@getByClass');
    Route::get('/hash/{hash}', 'RegisterController@getByHash');
    Route::post('/', 'RegisterController@new');
    Route::delete('/school/{school}/student/{student_id}', 'RegisterController@deleteByStudent');
    Route::delete('/hash/{hash}', 'RegisterController@deleteByHash');
});

Route::group([
    'prefix' => '/admission'
], function ($router) {
    Route::get('/', 'AdmissionController@getAll');
    Route::get('/school/{school}', 'AdmissionController@getBySchool');
    Route::get('/school/{school}/student/{student_id}', 'AdmissionController@getByStudent');
    Route::get('/school/{school}/class/{class}', 'AdmissionController@getByClass');
    Route::get('/hash/{hash}', 'AdmissionController@getByHash');
    Route::get('/operator/{operator_id}', 'AdmissionController@getByOperator');
    Route::post('/', 'AdmissionController@new');
    Route::delete('/{history_id}', 'AdmissionController@deleteByHistoryId');
});

