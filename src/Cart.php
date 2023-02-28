<?php

namespace App;

class Cart
{
    public float $price;
    public static float $tax = 1.2;

    public function getNetPrice(): float
    {
        //multiply price with tax
        return $this->price * self::$tax;
    }

    public function addToPrice(int $amount)
    {
        //take an amount and add it to the running price
        $this->price += $amount;
    }
}