<?php

class DemoAssertionsTest extends \PHPUnit\Framework\TestCase
{

    public function testThatStringMatch()
    {

        $string1 = 'testing';
        $string2 = 'testing';

        $this->assertSame($string1, $string2);
    }

}