<?php

namespace App\Languages;

class English extends Language
{
    // properties
    private $greeting = "Hello";

    public function __construct()
    {
        $this->name = "English";
    }

    public function hello() : string
    {
        return $this->greeting;
    }
}