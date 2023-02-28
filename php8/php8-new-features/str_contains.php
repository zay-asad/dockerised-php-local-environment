<?php

//str_contains
if(str_contains('haystack', 'stack')) {
    echo 'Found' . PHP_EOL;
} else {
    echo 'Not found' . PHP_EOL;
}

//str_starts_with
if(str_starts_with('haystack', 'hay')) {
    echo 'Found' . PHP_EOL;
} else {
    echo 'Not found' . PHP_EOL;
}

//str_ends_with
if(str_ends_with('haystack', 'hay')) {
    echo 'Found' . PHP_EOL;
} else {
    echo 'Not found' . PHP_EOL;
}