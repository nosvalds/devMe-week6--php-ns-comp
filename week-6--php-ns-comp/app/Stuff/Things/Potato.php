<?php 

namespace App\Stuff\Things;

class Potato
{
    // properties
    private $waterCount = 0;

    // methods

    // water the potato
    public function water() : Potato
    {
        $this->waterCount += 1;
        return $this;
    }

    // check if it's grown
    public function hasGrown() : bool
    {
        return $this->waterCount >= 5;
    }
}