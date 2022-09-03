<?php

use App\Cart;

class CartTest extends \PHPUnit\Framework\TestCase
{
    public function testCorrectNetPriceIsReturned()
    {
        $cart = new Cart();
        $cart->price = 10;
        $netPrice = $cart->getNetPrice();

        $this->assertEquals(12, $netPrice);
    }
}