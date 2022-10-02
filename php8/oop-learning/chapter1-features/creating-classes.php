<?php

namespace App;

class Product
{
    public string $name = 'soap';
    public int $price;


    public function priceAsCurrency()
    {
        $priceAsCurrency = $this->price / 100;

        return $priceAsCurrency;
    }
}

$soapObject = new Product();
$soapObject->price = 550;
$priceAsCurrency = $soapObject->priceAsCurrency();


var_dump($priceAsCurrency) . PHP_EOL; //PHP_EOL adds a space



//create a new object
//$soapObject = new Product();
//print $soapObject->name . "\n";
//$soapObject->name = 'toothpaste';
//print $soapObject->name . "\n";
//
////accessing price on the object
//print $soapObject->price . "\n";
//$soapObject->price = 200;
//print $soapObject->price . "\n";