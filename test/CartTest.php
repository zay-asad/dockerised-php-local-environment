<?php

use App\Cart;
use PHPUnit\Framework\TestCase;

class CartTest extends TestCase
{

    protected $cart;

    //this method will run before each test, 
    //useful to avoid duplications e.g. instantiate new object like Cart.php
    //now we can just use the $this->cart keywords in the other tests
    protected function setup(): void
    {
        $this->cart = new Cart();
    }

    //teardown method, useful to reset the system after the test execution
    //useful when changing orders of the tests below too.

    protected function tearDown(): void
    {
        Cart::$tax = 1.2;
    }

     //alternative way using the @test annotation
    /** @test */
    public function the_cart_tax_value_can_be_changed_statically()
    {
        Cart::$tax = 1.5;
        $this->cart->price = 10;
        $netPrice = $this->cart->getNetPrice();

        $this->assertEquals(15, $netPrice);
    }
    
    public function testCorrectNetPriceIsReturned()
    {
        $this->cart->price = 10;
        $netPrice = $this->cart->getNetPrice();

        $this->assertEquals(12, $netPrice);
    }


    //testing errors and exceptions
    /** @test */
    public function a_type_error_is_thrown_when_trying_to_add_a_non_int_to_the_price()
    {
        try {
            $this->cart->addToPrice('fifteen'); //trying to use a string instead of an int
            //pre-built method from phpunit that purposely fails your code
            $this->fail('A typeError should have been thrown');

        } catch (TypeError $error) {
            // dd($error); //symfony vardump for debugging
            $this->assertStringStartsWith('App\Cart::addToPrice():', $error->getMessage());
        }
    }
}