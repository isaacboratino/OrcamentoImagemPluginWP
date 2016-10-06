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
    return view('welcome');
});

Route::get('opcoes', ['uses' => 'OpcaoController@index','middleware'=>'cors']);

/*Route::group(['middleware' => 'cors'], function(Router $router){
    $router->get('opcoes', 'OpcaoController@index'); // <- your route here
});*/

//Route::resource('opcoes', 'OpcaoController');