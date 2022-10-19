<?php

require_once 'BaseClass.php';
require_once 'SubClass.php';

$baseObject = new BaseClass();
//$subObject = new SubClass(); //subclass

//print $baseObject->getPrivateProperty() . PHP_EOL;

print $baseObject->getProtectedProperty() . PHP_EOL;