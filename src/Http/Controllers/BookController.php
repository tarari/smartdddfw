<?php

namespace Http\Controllers;

use Application\GetBookUseCase;
use Infrastructure\Persistence\InMemory\InMemoryBookRepository;


class BookController {
    
    function index(){ 
        return json_encode([
            ['id'=>1,'title'=>'Java easy'],
            ['id'=>2,'title'=>'PHP easy']
        ]);
    }
    function show($id):string{
        
        $useCase=new GetBookUseCase(new InMemoryBookRepository());       
        $json=$useCase->execute($id);
        $book= json_decode($json);
        //dd($book);
        return json_encode([
                'id'=>$book->id,
                 'title'=>$book->title
                ]);
    }
    public function store(){
        $input= json_decode(file_get_contents('php://input'),true);
        return json_encode([
            'message'=>'Book created',
            'data'=>$input
        ]);
    }
}
