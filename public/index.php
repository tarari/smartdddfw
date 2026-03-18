<?php
    $books=[
        ['title'=>'Java easy'],
        ['title'=>'PHP easy']
    ];
    function response(int $code,array $data){
        http_response_code($code);
        header('Content-Type:application/json');
        echo json_encode($data);
    }
    $method= strtoupper($_SERVER['REQUEST_METHOD']);
    $uri=parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $body=json_decode(file_get_contents('php://input'),true) ?? [];
    
    switch($method){
        case 'GET':
            if($uri==='/api/books'){        
                response(200,$books);
            }else{              
                response(404,['msg'=>'Route not found']);
            }
            break;
        case 'POST':
            
            if($uri==='/api/books'){        
                response(201,$body);
            }else{              
                response(203,['msg'=>'Resource not created']);
            }
            
    }
    
