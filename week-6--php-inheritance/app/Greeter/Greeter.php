<?php

namespace App\Greeter;

use App\Languages\Language;

class Greeter
{
    //properties
    private $language;

    // constructor
    public function __construct(Language $language)
    {
        $this->language = $language;
    }

    // methods

    // greet
    public function greet(string $name) : string
    {
        return $this->language->hello() . " " . $name;
    }

}