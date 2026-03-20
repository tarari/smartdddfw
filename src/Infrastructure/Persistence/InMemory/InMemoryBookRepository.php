<?php



namespace Infrastructure\Persistence\InMemory;

use Domain\Book\Book;
use Domain\Book\BookId;
use Domain\Book\BookRepository;
use Override;



class InMemoryBookRepository  implements BookRepository{
    private array $books;
    public function __construct(){    
       
        $this->books=[['id'=>1,'title'=>'Java easy'],
            ['id'=>2,'title'=>'PHP easy']];
         
    }
    
    #[Override]
    public function byId(BookId $id): ?array {
       
        foreach ($this->books as $book) {
            if($book['id']==$id->value()){
                return $book;
            }
        }
        return null;
    }

    #[Override]
    public function findAll(): array {
        return [];
    }

    #[Override]
    public function save(Book $book): void {
        
    }
}
