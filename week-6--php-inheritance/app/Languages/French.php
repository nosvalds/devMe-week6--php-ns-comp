<?php

namespace App\Languages;

class French extends Language
{
    // properties
    private $greeting = "Bonjour";

    public function __construct()
    {
        $this->name = "French";
    }

    public function hello() : string
    {
        return $this->greeting;
    }
}