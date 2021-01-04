<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'Controller@index'); # ke Controller function index
Route::get('/index', 'Controller@index'); # ke Controller function index

#     LOGIN / USER    #
Route::get('/data_login/create', 'LoginController@create');
Route::post('/data_login', 'LoginController@store');
Route::get('/data_login', 'LoginController@index');
Route::get('/data_login/index', 'LoginController@index');
Route::get('/data_login/{kd_user}', 'LoginController@show');
Route::get('/data_login/{kd_user}/edit', 'LoginController@edit');
Route::put('/data_login/{kd_user}', 'LoginController@update');
Route::get('/data_login/{kd_user}/delete', 'LoginController@delete');

#     POLIKLINIK    #
Route::get('/poli/create', 'PoliController@create');
Route::post('/poli', 'PoliController@store');
Route::get('/poli', 'PoliController@index');
Route::get('/poli/index', 'PoliController@index');
Route::get('/poli/{kd_poli}', 'PoliController@show');
Route::get('/poli/{kd_poli}/edit', 'PoliController@edit');
Route::put('/poli/{kd_poli}', 'PoliController@update');
Route::get('/poli/{kd_poli}/delete', 'PoliController@delete');


#     DOKTER    #
Route::get('/dokter/create', 'DokterController@create');
Route::post('/dokter', 'DokterController@store');
Route::get('/dokter', 'DokterController@index');
Route::get('/dokter/index', 'DokterController@index');
Route::get('/dokter/{kd_dokter}', 'DokterController@show');
Route::get('/dokter/{kd_dokter}/edit', 'DokterController@edit');
Route::put('/dokter/{kd_dokter}', 'DokterController@update');
Route::get('/dokter/{kd_dokter}/delete', 'DokterController@delete');


/* 
Route::get('/', function (){return view('index');});
Route::get('/index', function (){return view('index');});
Route::get('/create_data_login', 'Controller@create');
Route::post('/data_login', 'Controller@store');
Route::get('/data_login', 'Controller@data_login');
Route::get('/data_login/{kd_user}', 'Controller@show');
Route::get('/data_login/{kd_user}/edit', 'Controller@edit');
Route::put('/data_login/{kd_user}', 'Controller@update');
Route::delete('/data_login/{kd_user}', 'Controller@delete'); // harus pake form
Route::get('/data_login/{kd_user}', 'Controller@delete'); // link tanpa form
*/