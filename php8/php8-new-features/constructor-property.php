<?php

//php 7.4 syntax for a constructor
// class Example {
//     public float $x;
//     public float $y;
//     public float $z;

//     public function __construct(float $x = 0.0, float $y = 0.0, float $z = 0.0) {
//     $this->x = $x;
//     $this->y = $y;
//     $this->z = $z;
//  }   
// }


// new syntax php 8.0
class Example {
    public function __construct(
        public float $x = 0.0, 
        public ?float $y = null, 
        public float $z = 0.0) {}   
}

$demo = new Example(1.1, 2.2, 3.3);
print_r($demo->y . PHP_EOL); //print out the y property

//please note that this might not be possible for abstract classes