<?php

require_once 'Song.php';

$song = new Song('yesterday', 100);


$song->setRating(3.5);

print $song->getRating();
