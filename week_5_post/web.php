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
/* ruta::metoda slanja podataka('path to view, by file name or method', 'controler@metoda/akcija[index, store, edit, update, delete, itd]') */
Route::get('/users', 'UsersController@index');

Route::post('/register', 'RegisterController@store');
Route::get('/register', 'RegisterController@index');
Route::get('/edit/{id}', 'UsersController@edit' );
Route::post('/update/{id}', 'UsersController@update') ->name('update.user');
Route::get('/delete/{id}', 'UsersController@delete');


Route::get('/posts', 'PostController@index');

Route::get('/create', 'PostController@create');
Route::post('/create', 'PostController@store');

Route::get('posts/edit/{id}', 'PostController@edit');
Route::get('posts/update/{id}', 'PostController@update'); 
Route::get('posts/delete/{id}', 'PostController@destroy');
Route::get('posts/like/{id}' ,'PostController@like');
