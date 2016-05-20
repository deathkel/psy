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

Route::get('/', 'HomeController@index');
Route::get('/login','UserController@getLogin');
Route::get('/logout','UserController@getLogout');
Route::post('/login','UserController@postLogin');

Route::group(['prefix'=>'user'],function(){
    Route::resource('user');
});


Route::group(['prefix'=>'book'],function(){

});

Route::group(['prefix'=>'comment'],function(){

});
