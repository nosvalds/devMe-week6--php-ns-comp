<?php

namespace App\Tricksy\Vehicles;

class Boat extends Vehicle
{

    // set Captain
     public function setCaptain(Person $captain) : Boat
     {
         parent::setOperator($captain);
         return $this;
     }
}