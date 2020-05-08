<?php

namespace App\Tricksy;

class Person 
{
    // properties
    private $firstName;
    private $lastName;

    // constructor
    public function __construct(string $firstName, string $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    // methods

        // full name
    public function fullName() : string
    {
        return "{$this->firstName} {$this->lastName}";
    }

    // say hello
    public function sayHelloTo(Person $person)
    {
        return "Hello {$person->fullName()}";
    }
}
