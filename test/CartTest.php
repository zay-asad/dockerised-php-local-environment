<?php

use App\Cart;

class CartTest extends \PHPUnit\Framework\TestCase
{
    protected $cart;

    protected function setUp(): void
    {
        $this->cart = new Cart();
    }

    public function testCorrectNetPriceIsReturned()
    {
        $this->cart->price = 10;
        $netPrice = $this->cart->getNetPrice();

        $this->assertEquals(12, $netPrice);
    }
}