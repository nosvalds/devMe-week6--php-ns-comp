<?php

namespace App\Cutlery;

class RuncibleSpoon extends Spoon 
{
    public function scoop() : RuncibleSpoon
    {
        parent::scoop();
        parent::scoop();
        return $this;
    }
}