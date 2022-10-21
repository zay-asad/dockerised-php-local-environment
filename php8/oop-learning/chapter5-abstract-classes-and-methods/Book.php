<?php

//abstract parent class
abstract class Book
{
    public string $title;

    public function __construct(
        string $title
    )
    {
        $this->title = $title;
    }

    public function getTitle(): string
    {
        return $this->title;

    }

    //creating an abstract method
    //anything that extends this abstract "Book" class will need to implement this method too
    abstract public function write(): string;
}
