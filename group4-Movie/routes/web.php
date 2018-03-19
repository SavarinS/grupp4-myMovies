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
Route::get('/movies/{movie}/edit', 'MovieController@edit')->name('movies.edit'); 
Route::get('/movies/{movie}', 'MovieController@show')->name('movies.show'); 
Route::put('/movies/{movie}', 'MovieController@update')->name('movies.update'); 


//Directors
Route::get('/directors', 'DirectorController@index')->name('directors.index');
Route::get('/directors/{director}', 'DirectorController@show')->name('directors.show');
Route::get('/directors/create', 'DirectorController@create')->name('directors.create');
Route::post('/directors/create', 'DirectorController@store')->name('directors.store');

Auth::routes();



// Genres

Route::get('/genres', 'GenreController@index')->name('genres.index');

Route::post('/genres', 'GenreController@store')->name('genres.store');
Route::get('/genres/create', 'GenreController@create')->name('genres.create');

Route::get('/genres/{genre}/edit', 'GenreController@edit')->name('genres.edit');
Route::get('/genres/{genre}', 'GenreController@show')->name('genres.show');
Route::put('/genres/{genre}', 'GenreController@update')->name('genres.update');
