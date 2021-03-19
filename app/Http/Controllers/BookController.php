<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index() {
        $books = Book::with(['authors', 'images', 'user'])->get();
        return $books;
    }

    public function findByISBN(string $isbn) : Book {
        $book = Book::where('isbn', $isbn)
                    ->with(['authors', 'images', 'user'])
                    ->first();
        return $book;
    }

    public function checkISBN (string $isbn)  {
        $book = Book::where('isbn', $isbn)->first();
        return $book != null ? response()->json(true, 200) : response()->json(false, 200);
    }

    public function findBySearchTerm(string $searchTerm) {
        $book = Book::with(['authors', 'images', 'user'])
                ->where ('title', 'LIKE', '%' . $searchTerm .'%')
                ->orWhere ('subtitle' , 'LIKE', '%' . $searchTerm .'%')
                ->orWhere ('description' , 'LIKE', '%' . $searchTerm .'%')

                ->orWhereHas('authors', function ($query) use ($searchTerm) {
                    $query->where('firstName', 'LIKE', '%' . $searchTerm .'%')
                        ->orWhere('lastName', 'LIKE', '%' . $searchTerm .'%');
                })->get();
        return $book;
    }



    public function show($book) {
        $book = Book::find($book);
        return view('books.show', compact('book'));
    }
}
