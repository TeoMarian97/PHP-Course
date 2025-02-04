<?php
$number1 = 5;
$number2 = 10;
$number3 = '20';
$fruit = 'apple';
$bool1 = true;
$bool2 = false;
$null = null;

//Implicit Conversion
$result = $number1 + $number2;
$result = $number1 + $number3; //String to Int Conversion
$result = $number3 + $number3; //String to Int Conversion again
$result = $number1 . $number2; //Int to String Conversion because of concat .
// $result = $fruit + $number2; //Throws Error: Can't do String + Int
$result = $number1 + $bool1; //We get 6 because true is 1, bool to Int conversion
$result = $number1 + $bool2; //Same, but false is 0
$result = $number1 + $null; //We get 5 because null is 0, null to Int conversion


//Explicit Conversion
$result = (string) $number1;
$result = (int) $number3;
$result = (bool) $number1; //Any number >0 is going to be converted into true


var_dump($result);
