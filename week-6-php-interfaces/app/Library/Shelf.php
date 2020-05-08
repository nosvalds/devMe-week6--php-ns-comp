<?php 

namespace App\Library;

class Shelf
{
    // properties
    private $items;

    // constructor
    public function __construct()
    {
        $this->items = collect(); // define empty collection of items
    }

    // methods

    // add item to shelf
    public function addItem(TitledInterface $item) : Shelf 
    {
        $this->items->push($item);
        return $this;
    }

    // display titles on the shelf
    public function titles() : array
    {
        return $this->items->map(function (TitledInterface $item) {
            return $item->title();
        })->all();
    }
}