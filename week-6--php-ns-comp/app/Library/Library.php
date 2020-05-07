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
    public function addShelf(Shelf $shelf) : Library
    {
        $this->shelves->push($shelf);
        return $this;
    }

    // display all the titles in the library
    public function titles() : array
    {
        return $this->shelves->reduce(function ($allTitles, Shelf $shelf) {
            return $allTitles->merge($shelf->titles());
        },collect())->all();
    }
}