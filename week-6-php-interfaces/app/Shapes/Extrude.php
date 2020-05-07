<?php

namespace App\Shapes;

class Extrude
{
    // properties
    private $shape;
    private $depth;

    // constructor
    public function __construct(ShapeInterface $shape, float $depth)
    {
        $this->shape = $shape;
        $this->depth = $depth;
    }

    // volume method
    public function volume() : float
    {
        return $this->shape->area() * $this->depth;
    }
}