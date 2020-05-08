<?php

namespace App\Tricksy\Vehicles;

class Car extends Vehicle
{

    // set Driver
    public function setDriver($driver) : Car
    {
    parent::setOperator($driver);
    return $this;
    }
}