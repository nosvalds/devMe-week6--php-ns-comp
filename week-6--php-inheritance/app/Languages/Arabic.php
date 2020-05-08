<?php

namespace App\Languages;

class Arabic extends Language
{
    // properties
    private $greeting = "مرحبا";

    public function __construct()
    {
        $this->name = "Arabic";
    }

    public function hello() : string
    {
        return $this->greeting;
    }
}