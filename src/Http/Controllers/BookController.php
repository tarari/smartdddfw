<?php

namespace Http\Controllers;
class BookController {
    
    function index(){ 
        return json_encode([
            ['id'=>1,'title'=>'Java easy'],
            ['id'=>2,'title'=>'PHP easy']
        ]);
    }
    function show($id){ 
        return json_encode([
            ['id'=>$id,'title'=>'other easy'],
            
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
