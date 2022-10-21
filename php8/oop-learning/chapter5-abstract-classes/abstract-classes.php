<?php

require_once 'Book.php';
require_once 'PhysicalBook.php';


//you cannot instantiate an "ABSTRACT CLASS" as this will throw an error.

//therefore, I am creating an object of Physical Book which uses the abstract class as an interface

$book = new PhysicalBook('Test Book', 400);

print $book->getTitle() . PHP_EOL;