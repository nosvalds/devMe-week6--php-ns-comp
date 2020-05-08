<?php

namespace App\Tricksy\Vehicles;

use App\Tricksy\Person;

class Car extends Vehicle
{

    // set Driver
    public function setDriver($driver) : Car
    {
    parent::setOperator($driver);
    return $this;
    }

    // list occupants for a car
    public function listOccupants()
    {
        return parent::getOccupants()->map(function ($person) {
            return $person->fullName();
        })->sort()->implode(", ");
    }
}