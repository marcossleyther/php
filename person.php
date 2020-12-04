<?php
class person
{
    public $lastName;
    public $firstName;

    function __construct($lastName, $firstName)
    {
        $this->lastName = $lastName;
        $this->firstName = $firstName;
    }

    function greetings(){
        return"Hola ".$this->lastName." ".$this->firstName;
    }
}
