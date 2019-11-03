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

// Route::get('book',function() {
//     dd("This is Book section");
// });

Route::get('books','BooksController@getBooks')->name('books');

Route::get('books/create','BooksController@createBook');

Route::post('books/store','BooksController@storeBook')->name('books.store');
