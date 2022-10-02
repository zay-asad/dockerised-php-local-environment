<?php

//boolean
//integer
//float
//string
//object
//resource
//array
//null

declare(strict_types=1); //stricly check param types


require_once 'Song.php';

$song = new Song('Example Song', 20000000);

print $song->numberOfPlays . PHP_EOL;
print $song->name . PHP_EOL;

//var_dump($song);