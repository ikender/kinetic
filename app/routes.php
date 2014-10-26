<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	$books	= Book::all();
	$genre	= Genre::lists('name', 'id');
    return View::make('books/list')->with('books', $books)->with('genre', $genre);
});

Route::get('books/add', function()
{
	$genre	= Genre::lists('name', 'id');
    return View::make('books/add')->with('genre', $genre);
});

Route::get('books/edit/{id}', function($id)
{
	$book	= DB::table('books')->where('id', $id)->first();
	$genre	= Genre::lists('name', 'id');
    return View::make('books/edit')->with('book', $book)->with('genre', $genre);
});

Route::get('books/view/{id}', function($id)
{
	$book	= DB::table('books')->where('id', $id)->first();
	$genre	= Genre::lists('name', 'id');
    return View::make('books/view')->with('book', $book)->with('genre', $genre);
});

Route::post('books/insert', 'BooksController@addBook');

Route::post('books/update/{id}', 'BooksController@updateBook');

Route::get('books/delete/{id}', 'BooksController@deleteBook');
