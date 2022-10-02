<?php

require_once 'DigitalBook.php';
require_once 'PhysicalBook.php';


$physicalBook = new PhysicalBook('A random book', 'John', 2000);

$physicalBook->weight = 300;

//
//print $physicalBook->getAuthor() . PHP_EOL;

print $physicalBook->print() . PHP_EOL;