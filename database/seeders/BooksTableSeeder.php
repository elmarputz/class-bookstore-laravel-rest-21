<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use DateTime;
use App\Models\Book;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $book = new Book;
        $book->title = 'Herr der Ringe';
        $book->isbn = '2394823948234';
        $book->subtitle = 'sdlfkj asldfjasldfk';
        $book->rating = 10;
        $book->description= 'aldkfjasf aldkjfas';
        $book->published = new DateTime();
        $book->save();
    }
}
