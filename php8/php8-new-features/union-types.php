<?php

// A “union type” accepts values of multiple different data types, rather than a single one. 
class Number {
    private int|float|null $number;
    /**
     * Set the value of number
     * @return  self
     */ 
    public function setNumber(int|float|null $number): void
    {
        $this->number = $number;
    }

     /**
     * Get the value of number
     */ 
    public function getNumber(): int|float|null
    {
        return $this->number;
    }

}

$number = new Number();
$number->setNumber(null); //int
// $number->setNumber(20.5); //float
var_dump($number->getNumber() . PHP_EOL);

?>