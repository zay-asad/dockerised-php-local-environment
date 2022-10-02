<?php

class Playlist
{
    public array $songs = [];

    //class type declaration, passing in Song in `AddSong` method
    public function addSong(Song $song): void //not returning anything so can add `void`
    {
        $this->songs[] = $song;
    }

    //return type declaration
    public function getLength(): int
    {
        return count($this->songs);
    }

}