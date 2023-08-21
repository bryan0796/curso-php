<?php
$number = 34;
$change = (string) $number;

var_dump($change);

$person = ['name' => 'Bryan', 'age' => 38];
$change2 = (object) $person;

var_dump($change2);

$number2 = 27;
$change3 = intval(($number2));

var_dump($change3);