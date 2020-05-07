<?php

namespace App\Shapes;

class Circle implements ShapeInterface
{
    // properties
    private $radius;
    private $area;

    // constructor
    public function __construct(float $radius)
    {
        $this->radius = $radius; 
        $this->area = pi() * $radius * $radius;
    }
    // area method
    public function area() : float
    {
        return $this->area;
    }
}