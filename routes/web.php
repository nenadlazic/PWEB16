<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::group(['middleware' => ['web']], function (){

    /*Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/offer', ['as' => '/offer',
                          'uses' => 'UserController@offerView']);

    Route::post('/signup', [
        'uses' => 'UserController@postSignUp', //@imefunkcije koja ce biti pozvana pri ovoj ruti
        'as' => 'signup'
    ]);*/

});

