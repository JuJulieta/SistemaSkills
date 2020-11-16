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

Auth::routes(['verify' => true]);

Route::get('/', function () {
    if(Auth::check()) {
        return view('/home');
    }else{
        return view('auth.login');
    }    
    
});

Route::get('/home', 'HomeController@index')->middleware('verified');

Route::resource('categorias', 'CategoriaController')->middleware('verified');

Route::resource('perfils', 'PerfilController')->middleware('verified');

Route::resource('nivels', 'NivelController')->middleware('verified');

Route::post('consultors', 'ConsultorController@buscar')->name('consultors.buscar')->middleware('verified');

Route::resource('consultors', 'ConsultorController')->middleware('verified');

//Route::post('subCategorias', 'SubCategoriaController@');

Route::resource('subCategorias', 'SubCategoriaController')->middleware('verified');

Route::resource('skills', 'SkillController')->middleware('verified');

Route::resource('perfilDetalles', 'PerfilDetalleController')->middleware('verified');

Route::resource('skillsConsultores', 'SkillsConsultoresController')->middleware('verified');

Route::post('skillsConsultores', 'SkillsConsultoresController@buscar')->name('skillsConsultores.buscar')->middleware('verified');


Route::group(['prefix' => 'auth'], function () {
    Route::get('/{provider}', 'Auth\LoginController@redirectToProvider');
    Route::get('/{provider}/callback', 'Auth\LoginController@handleProviderCallback');
});

Route::get('generator_builder', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@builder')->name('io_generator_builder')->middleware('verified');

Route::get('field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@fieldTemplate')->name('io_field_template')->middleware('verified');

Route::get('relation_field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@relationFieldTemplate')->name('io_relation_field_template')->middleware('verified');

Route::post('generator_builder/generate', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generate')->name('io_generator_builder_generate')->middleware('verified');

Route::post('generator_builder/rollback', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@rollback')->name('io_generator_builder_rollback')->middleware('verified');

Route::post(
    'generator_builder/generate-from-file',
    '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generateFromFile'
)->name('io_generator_builder_generate_from_file');

Route::resource('users', 'UserController');

Route::resource('profile', 'ProfileController')->middleware('verified');

Route::resource('misskills', 'MisSkillsController')->middleware('verified');

Route::resource('cargos', 'CargoController')->middleware('verified');

Route::resource('lineaServicios', 'LineaServicioController')->middleware('verified');

Route::resource('consultorSkills', 'ConsultorSkillController')->middleware('verified');

Route::resource('cursos', 'CursoController')->middleware('verified');

Route::resource('cursoConsultors', 'CursoConsultorController');

Route::resource('cursoSkills', 'CursoSkillController');