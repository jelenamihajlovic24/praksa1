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
Route::get('/', 'HomeController@index');
Route::get('omiljeni_film', 'FilmController@index');
Route::get('rodjendanski_poklon', 'RodjPoklonController@index');
Route::get('putovanja', 'PutovanjaController@index');
Route::get('hobi', 'HobiController@index');
Route::get('galerija', 'GalerijaController@index');
Route::get('kviz', 'KvizController@index');
