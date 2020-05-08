<?php

namespace App\Tricksy\Vehicles;

use App\Tricksy\Person;

abstract class Vehicle
{
    // properties
    protected $passengers;
    protected $operator;

    // methods

    // set passengers
    public function setPassengers(array $passengers) : Vehicle
    {
        $this->passengers = collect($passengers);
        return $this;
    }

    // set vehicle operator (Driver, Pilot, Captain)
    public function setOperator(Person $operator) : Vehicle
    {
        $this->operator = $operator;
        return $this;
    }

    // get standard occupants
    public function getOccupants()
    {
        return $this->passengers->push($this->operator);
    }
}