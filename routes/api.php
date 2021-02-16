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

Route::post('login','LoginApiController@login');

Route::group(['middleware' => 'auth:api'], function () { 
    Route::apiResource('contactoscorporativos','twContactosCorporativosController');
    Route::apiResource('contratoscorporativos','twContratosCorporativosController');
    Route::apiResource('corporativos','twCorporativosController');
    Route::apiResource('documentos','twDocumentosController');
    Route::apiResource('documentoscorporativos','twDocumentosCorporativosController');
    Route::apiResource('empresascorporativos','twEmpresasCorporativosController');
    Route::apiResource('usuarios','twUsuariosController');
    Route::post('logout','LoginApiController@logout');
    Route::get('consultacorporativo/{id}','ConsultasController@getCorporativo');
});