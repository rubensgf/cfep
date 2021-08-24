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

/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/

Route::get('cpf/{id}', 'Api\\MembroController@indexCpf');
Route::get('cnpj/{id}', 'Api\\MembroController@indexCnpj');

Route::post('auth/login', 'Api\\AuthController@login');

Route::group(['middleware' => ['apiJwt']] , function(){
    Route::post('users', 'Api\\UserController@index');
});


Route::post('logout', 'AuthController@logout');
Route::post('refresh', 'AuthController@refresh');
Route::post('me', 'AuthController@me');
