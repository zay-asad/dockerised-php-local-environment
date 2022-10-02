<?php

require_once 'Playlist.php';
require_once 'Song.php';

$playlist = new Playlist();

$song1 = new Song('A song', 100);
//$song2 = 'Yesterday'; //fatal error
$song2= new Song('Yesterday', 400);

$playlist->addSong($song1);
$playlist->addSong($song2);

if ($playlist->getLength() < 10)  {
    print "short playlist..." . PHP_EOL;
}

