<?php

namespace App\Domain\Book;

use App\Domain\Book\Book;
use App\Domain\Book\BookId;


interface BookRepository{
    public function save(Book $book):void;
    public function find(BookId $id):?Book;
    public function update(Book $book):void;
    public function findAll():array;
    
}