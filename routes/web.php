<?php

use Illuminate\Support\Facades\Route;

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
})->name('welcome');

Route::get('/characters', function () {
    return view('characters');
})->name('characters');

Route::get('/comics', function () {
    return view('comics');
})->name('comics');

/* Route::get('/movies', function () {
    return view('movies');
})->name('movies'); */
Route::get('/movies', 'MovieController@index')->name('movies');
Route::get('/movies/{movie}', 'MovieController@show')->name('guests.movies.show');

Route::resource('admin/movies', 'Admin\MovieController');

Route::get('/tv', function () {
    return view('tv');
})->name('tv');

/* Route::get('/games', function () {
    return view('games');
})->name('games'); */

Route::get('/games', 'GameController@index')->name('games');
Route::get('/games/{game}', 'GameController@show')->name('guests.games.show');

Route::resource('admin/games', 'Admin\GameController');

Route::get('/collectibles', function () {
    return view('collectibles');
})->name('collectibles');

Route::get('/videos', function () {
    return view('videos');
})->name('videos');

Route::get('/fans', function () {
    return view('fans');
})->name('fans');

/* Route::view('news', 'PostController@index')->name('guests.posts.index');
Route::view('news/{post}', 'PostController@show')->name('guests.posts.show'); */

Route::get('/news', 'PostController@index')->name('news');
Route::get('/news/{post}', 'PostController@show')->name('guests.posts.show');


Route::get('/shop', function () {
    return view('shop');
})->name('shop');

/* DASHBOARD */
Route::view('admin', 'admin.dashboard')-> name('admin');

/* POST ROUTE */
Route::get('admin/posts', 'Admin\PostController@index')->name('admin.posts.index');
Route::get('admin/posts/create', 'Admin\PostController@create')->name('admin.posts.create');
Route::post('admin/posts', 'Admin\PostController@store')->name('admin.posts.store');
Route::get('admin/posts/{post}', 'Admin\PostController@show')->name('admin.posts.show');
Route::get('admin/posts/{post}/edit', 'Admin\PostController@edit')->name('admin.posts.edit');
Route::put('admin/posts/{post}', 'Admin\PostController@update')->name('admin.posts.update');
Route::delete('admin/posts/{post}', 'Admin\PostController@destroy')->name('admin.posts.destroy');