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

Route::get('/',function(){
  return view('welcome');
});

Auth::routes();

Route::get('/book','BooksController@index')->name('index');

Route::get('/book/create','BooksController@create');
Route::post('/book/index','BooksController@store')->name('store');

Route::get('/{id}','BooksController@show')->where('id', '[0-9]+')->name('show');

Route::get('/book/edit/{id}','BooksController@edit')->where('id', '[0-9]+');
Route::post('/book/edit/{id}','BooksController@update')->name('update');

Route::delete('/{id}','BooksController@destroy')->where('id', '[0-9]+')->name('destroy');