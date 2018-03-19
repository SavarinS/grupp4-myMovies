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

//Home
Route::get('/', function () {
    return redirect()->route('home');
});
Route::get('/home', 'HomeController@index')->name('home');

// Movies
Route::get('/movies', 'MovieController@index')->name('movies.index');
Route::get('/movies/create', 'MovieController@create')->name('movies.create');
Route::post('/movies', 'MovieController@store')->name('movies.store');

//Directors
Route::get('/directors', 'DirectorController@index')->name('directors.index');
Route::get('/directors{director}', 'DirectorController@show')->name('directors.show');
Route::get('/directors/create', 'DirectorController@create')->name('directors.create');
Route::post('/directors/create', 'DirectorController@store')->name('directors.store');

Auth::routes();
