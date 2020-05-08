<?php 

namespace App\Library;

class DVD implements TitledInterface
{
    // properties
    private $title;

    // constructor
    public function __construct(string $title)
    {
        $this->title = $title;
    }

    // methods

    // get title
    public function title() : string
    {
        return $this->title;
    }
}