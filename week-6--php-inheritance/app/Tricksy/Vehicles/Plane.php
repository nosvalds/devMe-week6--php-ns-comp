<?php

namespace App\Tricksy\Vehicles;

use App\Tricksy\Person;

class Plane extends Vehicle
{
    // properties
    private $copilot;
    private $stewards;

    // set Pilot
    public function setPilot(Person $pilot) : Plane
    {
    parent::setOperator($pilot);
    return $this;
    }

    // set coPilot
    public function setCopilot(Person $copilot)
    {
        $this->copilot = $copilot;
    }

    // set stewards
    public function setStewards(array $stewards)
    {
        $this->stewards = collect($stewards);
    }
}