<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/book', function () {
    return view('book');
})->name('book');


Route::get('/book/all/{id}',
    'BookController@showOneBook'
)->name('book-data-one');


Route::get('/book/all/{id}/update',
    'BookController@updateBook'
)->name('book-update');

Route::post('/book/all/{id}/update',
    'BookController@updateBookSubmit'
)->name('book-update-submit');

Route::get('/book/all/{id}/delete',
    'BookController@deleteBook'
)->name('book-delete');


Route::get('/book/all', 'BookController@allDate')
    ->name('book-data');

Route::post('/book/submit', 'BookController@submit')
    ->name('book-form');

Route::get('/book/all/{id}',
    'BookController@showOneBook'
)->name('book-data-one');


Route::get('/book/all/{id}/update',
    'BookController@updateBook'
)->name('book-update');

Route::post('/book/all/{id}/update',
    'BookController@updateBookSubmit'
)->name('book-update-submit');

Route::get('/book/all/{id}/delete',
    'BookController@deleteBook'
)->name('book-delete');



Route::get('/book/all', 'BookController@allData')
    ->name('book-data');

Route::post('/book/submit', 'BookController@submit')
    ->name('book-form');

