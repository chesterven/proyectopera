<?php

use Illuminate\Support\Facades\Mail;
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



Route::get('/comentarios', 'ReinforcementController@comentarios')->name('comentarios');
Route::post('/comentarios/mensaje', 'ReinforcementController@mensaje')->name('mensaje');

//La ruta '/accesos' es la unica que solo veria el admin
//Todas las que estan debajo de esa son solo de proceso no hay ningun enlace para acceder a ellas.
//No se si tambien se le debe poner el middleware, yo digo que no porque desde que restringimos accesos ya se restringen todas esas 
Route::middleware(['auth'])->group(function(){

Route::get('/accesos', 'ReinforcementController@accesos')->name('accesos')->middleware('can:accesos');

Route::get('/accesos/{id}', 'ReinforcementController@detalleAcceso')->name('detalle.accesos')->middleware('can:detalle.accesos');

Route::get('/mensaje/{id}', 'ReinforcementController@mensajeAdmin')->name('mensajeAdmin');
Route::post('/comentarios/mensajeAdmin', 'ReinforcementController@enviarMensaje')->name('enviarMensaje');

});

