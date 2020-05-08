<?php

namespace App\Tricksy\Vehicles;

use App\Tricksy\Person;

class Boat extends Vehicle
{

    // set Captain
     public function setCaptain(Person $captain) : Boat
     {
         parent::setOperator($captain);
         return $this;
     }

      // list occupants for a boat
    public function listOccupants()
    {
        return parent::getOccupants()->map(function ($person) {
            return $person->fullName();
        })->sort()->implode(", ");
    }
}