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
Route::get('/','ContactController@index');
Route::get('/contact', 'ContactController@index');
Route::post('/contact', 'ContactController@store');
Route::get('/comment','ContactController@show');


//Route::get('/articles', 'ArticlesController@index');
//Route::get('/articles/create', 'ArticlesController@create');
//Route::get('/articles/{id}', 'ArticlesController@show');
//Route::get('/articles/{id}/edit', 'ArticlesController@edit');
//Route::post('articels','ArticlesController@store');

Route::resource('articles','ArticlesController');

Route:get('/message', function(){
    return view('message');
});

 Route::controllers([
     'auth' => 'Auth\AuthController',
     'passowrd' => 'Auth\PasswordController'
]);