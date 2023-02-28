<?php

// $num = 1;

//traditional switch statement
// switch($num) {
//     case 0:
//         $result = 'Foo';
//         break;
//     case 1:
//         $result = 'Bar';
//         break;
//     case 2:
//         $result = 'Baz';
//         break;
// }

// print_r($result . PHP_EOL);

// NEW SYNTAX -> MATCH EXPRESSION

$num = 0;

$result = match($num) {
    0, 1 => 'Foo', //number can be 0 or 1 in the var above
    1 => 'Bar',
    2 => 'Baz',
};

print_r($result . PHP_EOL);

