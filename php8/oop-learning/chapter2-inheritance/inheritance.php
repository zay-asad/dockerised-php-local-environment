<?php

require_once 'DigitalBook.php';
require_once 'PhysicalBook.php';
//
//$book = new Book('Random book', 'Jane', 2000);
//print $book->print() . PHP_EOL;

//
$physicalBook = new PhysicalBook('A random book', 'John', 2000, 300);
print $physicalBook->print() . PHP_EOL;

//$physicalBook->weight = 400; override the value of weight

$digitalBook = new DigitalBook('A new digital book','Ben', 1500, 2);

//
//print $physicalBook->getAuthor() . PHP_EOL;

print $physicalBook->getWeight() . PHP_EOL;

print $physicalBook->print() . PHP_EOL;

print $digitalBook->print() . PHP_EOL;

print $digitalBook->getFileSize() . PHP_EOL;


