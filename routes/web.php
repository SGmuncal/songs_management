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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/update_song/{id}', 'HomeController@update_song')->name('update_song');
Route::post('/update_new_song','HomeController@update_new_song')->name('update_new_song');
Route::get('/delete_song/{id}','HomeController@delete_song')->name('delete_song');
Route::get('/create_new_song','HomeController@create_new_song')->name('create_new_song');
Route::post('/submit_new_song','HomeController@submit_new_song')->name('submit_new_song');