<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/refuerzo/concentracion', 'ReinforcementController@concentracion')->name('refuerzo.atencion');
Route::get('/refuerzo/memoria', 'ReinforcementController@memoria')->name('refuerzo.memoria');
Route::get('/refuerzo/lectura', 'ReinforcementController@lectura')->name('refuerzo.lectura');
Route::get('/refuerzo/sintesis', 'ReinforcementController@sintesis')->name('refuerzo.sintesis');
Route::get('/consejos', 'ReinforcementController@consejos')->name('consejos');

Route::get('/accesos', 'ReinforcementController@accesos')->name('accesos');
