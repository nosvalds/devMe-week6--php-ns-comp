<?php

namespace App\Tricksy;

use Iterator; 

class Alphabet implements Iterator
{
    // properties
    private $position = 0;
    private $array = [];

    // constructor
    public function __construct()
    {

        for ($i = 65; $i < 65 + 26; $i += 1) { 
            $this->array[] = chr($i);
            
        }
    }

    // methods
    public function rewind()
    {
        $this->position = 0;
    }

    public function current()
    {
        return $this->array[$this->position];
    }

    public function key()
    {
        return $this->position;
    }

    public function next()
    {
        $this->position += 1;
    }

    public function valid()
    {
        return isset($this->array[$this->position]);
    }
}