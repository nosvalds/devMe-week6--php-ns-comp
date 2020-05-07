<?php

namespace App\People;

class Person 
{
    // properties
    private $name;
    private $birthDate;

    // constructor
    public function __construct(string $name, string $birthdDate)
    {
        $this->name = $name;
        $this->birthDate = $birthDate;
    }

}