<?php

namespace App\People;

use Carbon\Carbon;

class Person 
{
    // properties
    private $name;
    private $birthDate;
    private $personAge;

    // constructor
    public function __construct(string $name, string $birthDate)
    {
        $this->name = $name;
        $this->birthDate = new Carbon($birthDate); // use Carbon
        $this->personAge = $this->birthDate->age; // set age using carbon
    }

    // methods

    // static - get Ages
    public static function getAges(array $people) : array
    {
        return collect($people)->map(function (Person $person) {
            return $person->getAge();
        })->all();

    }

    // get age
    public function getAge() : int
    {
        return $this->personAge;
    }

}