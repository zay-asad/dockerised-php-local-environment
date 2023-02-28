<?php

$session = null;

//simplify conditionals into one-liner

//if any of these conditions are null then country will evaluate to null
$country = $session?->user?->getAddress()?->country;
var_dump($country);