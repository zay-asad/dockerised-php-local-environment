<?php

require_once 'Playlist.php';
require_once 'Song.php';

$genuineSong = new Playlist();

$song = new Song('Yesterday', 200);
$fakeSong = 'This is not a song.. it is a string'; //just passing a string instead of the `Song` object

//$genuineSong->addSong($fakeSong);

$genuineSong->addSong($song);

var_dump($genuineSong->getSongs());

