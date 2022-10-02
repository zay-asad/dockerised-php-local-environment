<?php

require_once 'Book.php';

//child class
class DigitalBook extends Book
{
    public int $fileSize;

    public function getFileSize(): int
    {
        return $this->fileSize;
    }

    public function print(): string
    {
        return "$this->title, $this->author, file-size: $this->fileSize";
    }
}