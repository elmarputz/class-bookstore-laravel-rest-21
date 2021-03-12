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

        $image1 = new \App\Models\Image;
        $image1->title = 'Bild 1';
        $image1->url = 'https://m.media-amazon.com/images/I/A1H0tY2Se7L._AC_UY218_.jpg';

        $image2 = new \App\Models\Image;
        $image2->title = 'Bild 2';
        $image2->url = 'https://m.media-amazon.com/images/I/A1H0tY2Se7L._AC_UY218_.jpg';

        $book->images()->saveMany([$image1, $image2]);
        $book->save();

    }
}
