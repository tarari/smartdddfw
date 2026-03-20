<?php

namespace Application;

use Domain\Book\BookId;
use Infrastructure\Persistence\InMemory\InMemoryBookRepository;


class GetBookUseCase {

    public function __construct(InMemoryBookRepository $repo){
        $this->repo=$repo;
    }  
    public function execute($id){
          $book=$this->repo->byId(new BookId($id));
          
          return json_encode(['id'=>$book['id'],
              'title'=>$book['title']]);
    }
}
