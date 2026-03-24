<?php


namespace Http;


class ResponseJson  extends Response{
    
    function __construct(int $statusCode, protected array $data) {
        parent::__construct($statusCode);
    }
    #[\Override]
    function send() {
        $this->setBody(json_encode($this->data));
        http_response_code($this->StatusCode);
        header("Content-Type:application/json");
        echo $this->getBody();
    }
}
