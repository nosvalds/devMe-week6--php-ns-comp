<?php 

namespace App\Library;

class Shelf
{
    // properties
    private $books = [];

    // methods

    // add Book to shelf
    public function addBook(Book $book) : Shelf
    {
        $this->books[] = $book;
        return $this;
    }
}