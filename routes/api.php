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

Route::delete('consultorSkill/{consultor_id}/{skill_id}', 'ConsultorSkillAPIController@destroy')->name('nivelSkill.delete');
Route::put('consultorSkill/{consultor_id}/{skill_id}/{nivel_id}', 'ConsultorSkillAPIController@update')->name('nivelSkill.update');
Route::patch('consultorSkill/{consultor_id}/{skill_id}/{nivel_id}', 'ConsultorSkillAPIController@update')->name('nivelSkill.update');
