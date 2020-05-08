<?php

namespace App\Cutlery;

class Spoon
{
    // properties
    protected $scoops = 0;

    // methods

    // scoop
    public function scoop() : Spoon    
    {
        $this->scoops += 1;
        return $this;
    }

    // how many scoops?
    public function howManyScoops() : int
    {
        return $this->scoops;
    }
}