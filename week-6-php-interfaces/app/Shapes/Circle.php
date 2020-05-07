<?php

namespace App\Shapes;

class Circle implements ShapeInterface
{
    // properties
    private $radius;

    // constructor
    public function __construct(float $radius)
    {
        $this->radius = $radius; 
    }
    // area method
    public function area() : float
    {
        return pi() * pow($this->radius, 2);
    }
}