<?php

class Product

{
    public function __construct(public $name='Soap', public $price = 100)
    {

    }


    public function priceAsCurrency($divisor = 1 , $currencySymbol = '$'): string
        //passing 2 default values for the arguments in the method above
    {
        $priceAsCurrency = $this->price / $divisor;

        return $currencySymbol . $priceAsCurrency;
    }
}

$product = new Product(price: 300); // (PHP8+ feature) using named arguments to ONLY pass the price argument
print $product->name . PHP_EOL; //add new line
print $product->price . PHP_EOL; //add new line
