<?php

require_once 'Song.php';

$songTitles = ['Yesterday, Help!, Something'];

//using typed properties in the Song class
$song = new Song($songTitles[0], 100);

var_dump($song->name);


//var_dump($song->name);
