<?php

use App\Math;
use PHPUnit\Framework\TestCase;

class MathTest extends TestCase 
{
    protected $math;

    //this method will run before each test, 
    //useful to avoid duplications e.g. instantiate new object like Cart.php
    //now we can just use the $this->cart keywords in the other tests
    protected function setup(): void
    {
        $this->math = new Math();
    }
    public function test_correct_number_is_returned()
    {
        $this->math->num1 = 20;
        $this->math->num2 = 20;

        $this->assertEquals(40, $this->math->addNumbers(20, 20));
    }

    //testing errors and exceptions
    /** @test */
    public function a_type_error_is_thrown_when_trying_to_add_a_non_int_to_the_price()
    {
        try {
            $this->math->addNumbers('fifteen', 'twelve'); //trying to use a string instead of an int
            //pre-built method from phpunit that purposely fails your code
            $this->fail('A typeError should have been thrown');

        } catch (TypeError $error) {
            // dd($error); //symfony vardump for debugging
            $this->assertStringStartsWith('Unsupported operand types: string + string', $error->getMessage());
        }
    }
}