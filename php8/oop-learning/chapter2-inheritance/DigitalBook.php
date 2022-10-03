<?php

require_once 'Book.php';

//child class
class DigitalBook extends Book
{
    public int $fileSize;

    public function __construct(
        string $title,
        string $author,
        int $price,
        int $fileSize
    )
    {
        parent::__construct($title, $author, $price);

        $this->fileSize = $fileSize;
    }


    public function getFileSize(): int
    {
        return $this->fileSize;
    }

    public function print(): string
    {
        return "$this->title, $this->author, file-size: $this->fileSize";
    }
}