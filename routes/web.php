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

// Route::get('/', function () {
//     return view('book.index');
// });

Route::get('/','BooksController@index');

Auth::routes();

Route::get('/book','BooksController@index');

Route::get('/book/create','BooksController@create');
Route::post('/book/create','BooksController@store');

// Route::get('/book/create','BooksController@create');
// Route::post('store','BooksController@store');
// Route::get('/home', 'HomeController@index')->name('home');
