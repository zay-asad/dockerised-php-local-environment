<?php

require_once 'Book.php';

//child class
class PhysicalBook extends Book
{
    public int $weight;

    //creating another constructor inside the child class
    public function __construct(
        string $title,
        string $author,
        int $price,
        int $weight
    )
    {
        parent::__construct($title, $author, $price);

        $this->weight = $weight;
    }

    public function getWeight(): int
    {
        return $this->weight;
    }

    public function print(): string
    {
        return "$this->title, $this->author, weight: $this->weight";
    }
}