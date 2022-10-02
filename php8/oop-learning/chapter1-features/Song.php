<?php

//please note this class is also being called in primitive-types.php
//spotify example
class Song
{
    public string $name;
    public int $numberOfPlays;

    //old way of defining construct version < 7
    public function __construct(string $name, int $numberOfPlays)
    {
        $this->name = $name;
        $this->numberOfPlays = $numberOfPlays;
    }
}


