<?php

use Illuminate\Support\Facades\Route;
use App\Models\Book;

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
    $books = Book::all();
    return view('books.index', compact('books'));
});

Route::get('/books/{id}', function ($id) {
    $book = Book::find($id);
    return view('books.show', compact('book'));
});
