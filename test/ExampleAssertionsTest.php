<?php

use PHPUnit\Framework\TestCase;

class ExampleAssertionsTest extends TestCase
{
    public function testThatStringMatch()

    {
        $string1 = 'testing';
        $string2 = 'testing';
        // $string3 = 'Testing';

        //the first argument is what we're expecting and the second arg is the actual result
        //comparing the two
        //test should pass.
        $this->assertSame($string1, $string2);

        //second assertion, we are now comparing string2 with string 3
        //test should fail.
        // $this->assertSame($string2, $string3);
    }

    public function testThatNumbersAddup()
    {
        $this->assertEquals(10, 5 + 5);
    }
}