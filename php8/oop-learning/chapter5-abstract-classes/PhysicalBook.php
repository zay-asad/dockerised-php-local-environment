<?php

require_once 'Book.php';

//child class
class PhysicalBook extends Book
{
    public int $weight;

    //creating another constructor inside the child class
    public function __construct(
        string $title,
        int $weight
    )
    {
        parent::__construct($title);

        $this->weight = $weight;
    }

    public function getWeight(): int
    {
        return $this->weight;
    }
}