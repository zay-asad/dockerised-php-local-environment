<?php

require_once 'Book.php';

//child class
class PhysicalBook extends Book
{
    public int $weight;

    public function getWeight(): int
    {
        return $this->weight;
    }

    public function print(): string
    {
        return "$this->title, $this->author, weight: $this->weight";
    }
}