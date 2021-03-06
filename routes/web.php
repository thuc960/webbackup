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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/user', 'UserController@index');
// Route::get('/createuser', 'UserController@create');
// Route::post('/submituser','UserController@store');

Route::resource('user','UserController');

Route::resource('server','ServerController');

Route::resource('type','TypeController');

Route::resource('schedule','ScheduleController');
