<?php

use Illuminate\Http\Request;

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
// 'Api\UserController@userTypeShow'
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//users
Route::get('v1/user/list/{id}','Api\UserController@userList');

//meeting
Route::post('v1/meeting/create','Api\MeetingController@createMeeting');
