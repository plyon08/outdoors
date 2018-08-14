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

Route::view('/', 'welcome');

Auth::routes();

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::get('/journal', 'JournalController@index')->name('journal');
Route::get('/journal/create-entry', 'JournalController@create')->name('create');
Route::post('/journal', 'JournalController@store')->name('store');
Route::get('/journal/{journal}', 'JournalController@show')->name('show');
Route::get('/journal/{journal}/edit-entry', 'JournalController@edit')->name('edit');
Route::patch('/journal/{journal}', 'JournalController@update')->name('update');
Route::delete('/journal/{journal}', 'JournalController@destroy')->name('destroy');
