<?php

namespace App\Shapes;

class Rectangle implements ShapeInterface
{
    // properties
    private $width;
    private $height;

    // constructor
    public function __construct(float $width, float $height)
    {
        $this->width = $width; 
        $this->height = $height; 
    }
    // area method
    public function area() : float
    {
        return $this->width * $this->height;
    }
}