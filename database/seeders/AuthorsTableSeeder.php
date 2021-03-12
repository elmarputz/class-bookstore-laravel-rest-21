<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Seeder;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $author1 = new Author();
        $author1->firstName = 'Fritz';
        $author1->lastName = 'Huber';
        $author1->save();

        $author2 = new Author();
        $author2->firstName = 'Franz';
        $author2->lastName = 'Mayer';
        $author2->save();

        $author3 = new Author();
        $author3->firstName = 'Sepp';
        $author3->lastName = 'Berger';
        $author3->save();


    }
}

