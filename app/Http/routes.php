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

Route::get('/', 'ListsController@index');

Route::resource('lists', 'ListsController');

Route::get('contact', ['as'=>'contact', 'uses'=>'AboutController@create']);
Route::post('contact', ['as'=>'contact_store', 'uses'=>'AboutController@store']);
