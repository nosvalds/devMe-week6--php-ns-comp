<?php

namespace App\Tricksy\Vehicles;

use App\Tricksy\Person;

abstract class Vehicle
{
    // properties
    protected $passengers;
    protected $operator;
    protected $occupants;

    // construct
    public function __construct()
    {
        $this->occupants = collect();
    }

    // methods

    // set passengers
    public function setPassengers(array $passengers) : Vehicle
    {
        $this->passengers = collect($passengers);
        foreach ($passengers as $passenger) {
            $this->occupants->push($passenger);
        }
        return $this;
    }

    // set vehicle operator (Driver, Pilot, Captain)
    public function setOperator(Person $operator) : Vehicle
    {
        $this->operator = $operator;
        $this->occupants->push($operator);
        return $this;
    }

    // get standard occupants
    public function listOccupants() : string
    {
        return $this->occupants->map(function (Person $person) {
            return $person->fullName();
        })->sort()->implode(', ');
    }
}