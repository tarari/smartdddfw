<?php

namespace Http\Controllers;

use Application\GetBookUseCase;
use Infrastructure\Persistence\InMemory\InMemoryBookRepository;
use Http\ResponseJson;

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
        $data=['msg'=>'Book created',
                [
                'id'=>$book->id,
                 'title'=>$book->title
                ]];  
        
        $res=new ResponseJson(200,$data);       
        $res->send();
        
    }
    public function store(){
        $input= json_decode(file_get_contents('php://input'),true);
        $response=new ResponseJson(201,
            ['message'=>'Book created',
            'data'=>$input
        ]);
        $reponse->send();
        
    }
}
