<?php
namespace Http;


class Router
{
    public function dispatch(string $method, string $uri)
    {
        if ($method === 'GET' && $uri === '/api/books') {
            return json_encode(['message' => 'List of books']);
        }

        if ($method === 'GET' && preg_match('#^/api/books/(\d+)$#', $uri, $matches)) {
            return json_encode([
                'message' => 'Book detail',
                'id' => $matches[1]
            ]);
        }

        http_response_code(404);
        return json_encode(['error' => 'Not Found']);
    }
}