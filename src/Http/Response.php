<?php



namespace Http;


class Response {
    private array $headers=[];
    private string $body;
    private int $statusCode;
    
    public function __construct() {
        $this->headers[]="Content-Type:application/json";
    }
    public function getBody(): string {
        return $this->body;
    }

    public function getStatusCode(): int {
        return $this->statusCode;
    }

    public function setBody(string $body): void {
        $this->body = $body;
    }

    public function setStatusCode(int $statusCode): void {
        $this->statusCode = $statusCode;
    }

    public function send(){
        http_response_code($this->statusCode);        
        foreach ($this->headers as $header) {
            header("$header");
        }
        echo $this->body;
        
    }
    
}
