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
}
