<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/books', function () {
    return 'Here are all of the books...';
});

Route::get('books/create', function () {
    $view = '<form method="POST" action="/books/create">';
    #$view .= '<input type="hidden" value="'.csrf_token().'">';
    $view .= csrf_field();
    $view .= '<input type="text" name="title">';
    $view .= '<input type="submit">';
    $view .= '</form>';

    return $view;
});

Route::post('books/create', function () {
    return "Process adding the book...";
});

Route::get('/books/{title}', function ($title) {
    return 'You reqested the book: '.$title;
});
