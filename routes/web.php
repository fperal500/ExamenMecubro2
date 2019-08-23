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

Route::resource('/contactos','ContactoController');
//Route::Get('/contactos', 'ContactoController');
Route::Get('PaisesByPaises/{id}', 'ContactoController@byCountry');

Route::get('/', function () {
    return view('welcome');
});


/*Route::get('/inicio', 'ContactoController@index');

Route::get('/crear', 'ContactoController@create');

Route::get('/actulizar','ContactoController@update');

Route::get('/insertar', 'ContactoController@store');

Route::get('/borrar', 'ContactoController@destroy');*/



