<?php

//spotify example
class Song
{
    public string $name;
    public int $numberOfPlays;
    private int|float $rating;

    //old way of defining construct version < 7
    public function __construct(string $name, int $numberOfPlays)
    {
        $this->name = $name;
        $this->numberOfPlays = $numberOfPlays;
    }


    /**
     * @param float|int $rating
     */
    public function setRating(int|float $rating): void
    {
        // if < 0 attempted, set to 0
        // max returns the highest value
        $rating = max(0, $rating);
        // if > 5 attempted, set to 5
        // the value will never be higher than 5
        $this->rating = min(5, $rating);
    }

    /**
     * @return float|int
     */
    public function getRating(): float|int
    {
        return $this->rating;
    }
}


