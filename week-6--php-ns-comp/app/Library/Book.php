<?php 

namespace App\Library;

class Book 
{
    // properties
    private $title;
    private $totalPages;
    private $pagesRead = 1;

    // constructor
    public function __construct(string $title, int $totalPages)
    {
        $this->title = $title;
        $this->totalPages = $totalPages;
    }

    // methods

    // read a number of pages
    public function read(int $pagesRead) : Book
    {
        $this->pagesRead += $pagesRead;
        return $this;
    }

    // what page am I on?
    public function currentPage() : int
    {
        return $this->pagesRead;
    }

    // get title
    public function getTitle() : string
    {
        return $this->title;
    }
}