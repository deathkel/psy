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

Route::group(['prefix'=>'home'],function(){
    Route::get('/','HomeController@home');
    Route::get('dongfang','HomeController@dongfang');
    Route::get('weilai','HomeController@weilai');
    Route::get('xifang','HomeController@xifang');
    Route::get('yuanchuang','HomeController@yuanchuang');
    Route::get('personal','HomeController@personal');
    Route::get('read','HomeController@read');
    Route::get('search','HomeController@search');
    Route::get('upload','HomeController@upload');
    Route::get('mynovel','HomeController@mynovel');
    Route::get('notice','HomeController@notice');
    Route::get('setting','HomeController@setting');
    Route::get('xieyi','HomeController@xieyi');
});
//Route::group(['prefix'=>'user'],function(){
//    Route::resource('user',['only'=>['index']]);
//});


//Route::group(['prefix'=>'book'],function(){
//
//});

//Route::group(['prefix'=>'comment'],function(){
//
//});
