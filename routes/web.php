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
Auth::routes();	


Route::get('/', function () {
    return view('ControlPanel/panel');
});

Route::get('user', function () {
    return view('auth/register');
});


Route::get('logout', function () {
    return view('auth/login');
});



Route::get('/home', 'HomeController@index')->name('home');
