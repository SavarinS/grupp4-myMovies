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
Route::post('/movies', 'MovieController@store')->name('movies.store');
Route::get('/movies/create', 'MovieController@create')->name('movies.create');

Route::get('/movies/{movie}/edit', 'MovieController@edit')->name('movies.edit');
Route::get('/movies/{movie}', 'MovieController@show')->name('movies.show');
Route::put('/movies/{movie}', 'MovieController@update')->name('movies.update');

//Directors
Route::get('/directors', 'DirectorController@index')->name('directors.index');
//Route::get('/directors', 'DirectorController@show')->name('director.show');
Route::get('/directors/create', 'DirectorController@create')->name('directors.create');
Route::post('/directors/create', 'DirectorController@store')->name('directors.store');

Auth::routes();
