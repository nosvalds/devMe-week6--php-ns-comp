<?php

namespace App\Cutlery;

class RuncibleSpoon extends Spoon 
{
    public function scoop() : RuncibleSpoon
    {
        // alternative 
        // parent::scoop();
        // parent::scoop();
        $this->scoops += 2;

        return $this;
    }
}