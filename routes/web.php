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
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('login','Auth\LoginController@login')->name('login');
// {{ csrf_field() }} colocar debajo del form de login