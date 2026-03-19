<?php
namespace Http;

use Http\Controllers\BookController;


class Router
{
    public function dispatch(string $method, string $uri)
    {
        $controller=new BookController();
        
        if ($method === 'GET' && $uri === '/api/books') {
            return $controller->index();
        }

        if ($method === 'GET' && preg_match('#^/api/books/(\d+)$#', $uri, $matches)) {
            return $controller->show((int)$matches[1]);
        }

        http_response_code(404);
        return json_encode(['error' => 'Not Found']);
    }
}