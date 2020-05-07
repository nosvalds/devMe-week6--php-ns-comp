<?php

namespace App\Shapes;

class Square implements ShapeInterface
{
    // properties
    private $sideLength;
    private $area;

    // constructor
    public function __construct(float $sideLength)
    {
        $this->sideLength = $sideLength; 
        $this->area = $sideLength * $sideLength;
    }
    // area method
    public function area() : float
    {
        return $this->area;
    }
}