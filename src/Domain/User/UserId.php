<?php
namespace Domain\User;

class UserId{
    private string $id;
    function __construct(string $id)
    {
        $this->id=$id;
    }

    function __toString():string
    {
        return $this->id;

    }
    function value():string{
        return $this->id;
    }
}