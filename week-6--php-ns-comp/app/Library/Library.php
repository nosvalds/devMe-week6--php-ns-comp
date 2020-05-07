<?php 

namespace App\Library;

class Library
{
    // properties
    private $shelves;

    // constructor
    public function __construct()
    {
        $this->shelves = collect();

    }

    // methods

    // add a shelf to the library
    public function addShelf(Shelf $shelf)
    {
        $this->shelves->push($shelf);
    }

    // display all the titles in the library
    public function titles()
    {
        return $this; // map titles() on each shelf and concat?
    }
}