<?php

namespace App\Languages;

abstract class Language
{
    // properties
    protected $name;

    // methods

    // name getter
    public function name() : string
    {
        return $this->name;
    }

    // hello
    abstract public function hello() : string;
}