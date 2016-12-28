<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('auth/login');
});

Route::resource('personal/persona','PersonaController');
Route::resource('seguridad/usuario','UsuarioController');


Route::auth();

Route::get('/home', 'HomeController@index');

/* este es para que cualquier url que se entre se vaya al home */

Route::get('/{slug?}', 'HomeController@Index');