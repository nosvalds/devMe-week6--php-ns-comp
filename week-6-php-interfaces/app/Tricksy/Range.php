<?php

namespace App\Tricksy;

use Iterator;

class Range implements Iterator
{
    // properties
    private $position = 0;
    private $array = [];

    // constructor, makes the range with a for loop
    public function __construct(int $min, int $max)
    {

        for ($i = $min; $i <= $max; $i += 1) { 
            $this->array[] = $i;
            
        }
    }

    // iterator methods
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