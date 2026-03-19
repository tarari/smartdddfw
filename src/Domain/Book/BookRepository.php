<?php

namespace Domain\Book;

use Domain\Book\Book;
use Domain\Book\BookId;


interface BookRepository{
    public function save(Book $book):void;
    public function byId(BookId $id):?Book;
    public function findAll():array;
    
}