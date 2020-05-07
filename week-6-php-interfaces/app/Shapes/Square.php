<?php

namespace App\Shapes;

class Square implements ShapeInterface
{
    // properties
    private $sideLength;

    // constructor
    public function __construct(float $sideLength)
    {
        $this->sideLength = $sideLength; 
    }
    // area method
    public function area() : float
    {
        return pow($this->sideLength, 2);
    }
}