<?php 

namespace App\Library;

class Shelf
{
    // properties
    private $books;

    // constructor
    public function __construct()
    {
        $this->books = collect(); // define empty collection
    }

    // methods

    // add Book to shelf
    public function addBook(Book $book) : Shelf
    {
        $this->books->push($book);
        return $this;
    }

    // display titles on the shelf
    public function titles() : array
    {
        return $this->books->map(function ($book) {
            return $book->getTitle();
        })->all();

    }
}