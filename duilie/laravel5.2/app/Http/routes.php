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
Route::any('index','RegController@index');
Route::any('add','RegController@add');
Route::any('show','RegController@show');
Route::any('delete','RegController@delete');
Route::any('update','RegController@update');
Route::any('show_update','RegController@show_update');
Route::any('login','LoginController@login');
Route::any('add_login','LoginController@add_login');
Route::any('login_show','LoginController@login_show');
Route::any('show_list','LoginController@show_list');
Route::any('time_show','LoginController@time_show');
Route::any('wordindex','WordController@wordindex');
Route::any('wordadd','WordController@wordadd');
Route::any('wordshow','WordController@wordshow');
Route::any('worddelete','WordController@worddelete');
Route::any('wordupdate','WordController@wordupdate');
Route::any('wordupdateadd','WordController@wordupdateadd');
