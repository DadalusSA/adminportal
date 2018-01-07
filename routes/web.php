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
    return view('auth.login');
});




Route::middleware(['auth'])->group(function (){

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/register', 'Auth\RegisterController@register');

Route::get('/logout', 'HomeController@doLogout')->name('home');


Route::get('/user', function () {
  return View::make('auth.register');
  });

});
