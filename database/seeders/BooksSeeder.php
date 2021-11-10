<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;
use App\Models\Book;
class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //membuat sample penulis
        $author1 = Author::create(['name'=>'Risma Septiani Fadila']);
        $author2 = Author::create(['name'=>'Tiara Novita Sari']);
        $author3 = Author::create(['name'=>'Syifa Siti Khumairah']);

        //membuat sample buku
        $book1 = Book::create(['title'=>'Kupinang Kau Dengan Hamdalah','amount'=>3,'author_id'=>$author1->id]);
        $book2 = Book::create(['title'=>'Jalan Para Pejuang','amount'=>2,'author_id'=>$author2->id]);
        $book3 = Book::create(['title'=>'Seminggu Belajar Laravel','amount'=>3,'author_id'=>$author3->id]);
        $book4 = Book::create(['title'=>'Menyelami Buku Laravel','amount'=>4,'author_id'=>$author3->id]);

    }
}
