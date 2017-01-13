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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/signup', [
    'uses' => 'UserController@postSignUp', //@imefunkcije koja ce biti pozvana pri ovoj ruti
    'as' => 'signup'
]);

Route::post('/signin', [
    'uses' => 'UserController@postSignIn', //@imefunkcije koja ce biti pozvana pri ovoj ruti
    'as' => 'signin'
]);

// API ROUTES ==================================  
Route::group(array('prefix' => 'api'), function() {
    Route::resource('comments', 'CommentController', 
        array('only' => array('index', 'store', 'destroy')));
});

Route::any('{path?}', function()
{
    return File::get(public_path() . '/exploreserbia.php');
})->where("path", ".+");


//Route::group(['middleware' => ['web']], function (){

//    Route::any('{path?}', ['as' => '{path?}',
//        'uses' => 'UserController@offerView'])->where("path", ".+");



//    Route::any('{path?}', function()
//    {
////        return redirect()->to(public_path());
//        return view("index");
//    })->where("path", ".+");

/*
    Route::get('/offer', ['as' => '/offer',
                          'uses' => 'UserController@offerView']);

    Route::post('/signup', [
        'uses' => 'UserController@postSignUp', //@imefunkcije koja ce biti pozvana pri ovoj ruti
        'as' => 'signup'
    ]);*/

//});

