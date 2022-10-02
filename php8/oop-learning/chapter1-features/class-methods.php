<?php

class Product

{
    public string $name = 'soap';
    public int $price = 100;


    public function priceAsCurrency($divisor = 1 , $currencySymbol = '$'): string
    //passing 2 default values for the arguments in the method above
    {
        $priceAsCurrency = $this->price / $divisor;

        return $currencySymbol . $priceAsCurrency;
    }
}

$product = new Product();
print $product->priceAsCurrency(currencySymbol: '£') . PHP_EOL; //passing named argument


