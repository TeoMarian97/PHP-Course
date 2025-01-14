<?php

/*
  PHP DATA TYPES:

- String
- Integer
- Float
- Boolean
- Array
- Object
- NULL
- Resource
*/


$name = 'Brad Traversy';
$name2 = 'John Doe';

var_dump($name);
echo '<br/>';
echo getType($name2);
echo '<br/>';


$age = 35;
var_dump($age);
echo '<br/>';

$rating = 4.5;
var_dump($rating);
echo '<br/>';

$isLoaded = true;
var_dump($isLoaded);
echo '<br/>';

$friends = ['John', 'Jack', 'Jane'];
var_dump($friends);
echo '<br/>';

$person = new stdClass();
var_dump($person);
echo '<br/>';


$car = null;
var_dump($car);
echo '<br/>';

$file = fopen('sample.txt', 'r');
var_dump($file);
echo '<br/>';
