<?php

require_once 'Counter.php';
require_once 'Connection.php';

$connection1 = new Connection();

print Connection::$count . PHP_EOL;

$connection2 = new Connection();

print Connection::$count . PHP_EOL;

//static properties do not have to be initialised as new objects

// 1. available anywhere in your program
// 2. easy to setup
// 3. same value is available to every object instance of that class

//Counter::$count++;
//Counter::$count++;
//Counter::$count++;
//Counter::$count++;
//Counter::$count++;
//
//print Counter::$count . PHP_EOL;


