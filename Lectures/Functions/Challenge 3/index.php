<?php
/*
  Challenge 1: Fahrenheit to Celsius
  Create a function called `fahrenheitToCelsius` that takes a Fahrenheit temperature as an argument. Return the temperature converted to Celsius.

  The formula to convert Fahrenheit to Celsius is: Celsius = (Fahrenheit - 32) * 5/9
*/

function fahrenheitToCelsius($fahrenheit)
{
  return ($fahrenheit - 32) * 5 / 9;
}

echo '68F =' . fahrenheitToCelsius(68) . 'C';

echo '<br>';

/*
  Challenge 2: Print names in uppercase
  Create a function called `printNamesToUpperCase` that takes an array of names as an argument. The function should loop through the array and print each name to the screen in uppercase letters.
*/

function printNamesToUpperCase($names)
{
  foreach ($names as $name) {
    echo strtoupper($name) . '<br>';
  }
}

$names = ['Alice', 'Bob', 'Charlie', 'David'];
printNamesToUpperCase($names);
echo '<br>';

/*
  Challenge 3: Find the longest word
  1. Create a function called `findLongestWord` that takes a sentence as an argument.
  2. The function should return the longest word in the sentence.
  3. The output should look like this:
*/

function findLongestWord($sentence)
{
  $words = explode(' ', $sentence);
  $longestWord = '';
  foreach ($words as $word) {
    $word = trim($word);
    if (strlen($word) > strlen($longestWord)) {
      $longestWord = $word;
    }
  }
  return $longestWord;
}

$sentence = 'The quick brown fox jumped over the lazy dog';
$longestWord = findLongestWord($sentence);
echo $longestWord;
