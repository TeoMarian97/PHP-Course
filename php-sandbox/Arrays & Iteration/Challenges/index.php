<?php

/*
  Challenge 1: Sum of an array

  1. Create an array of numbers 
  2. Get the sum of all of the numbers combined and put into a variable.
  4. Get the amount of numbers in the array and put into a variable.
  5. Print out 'The sum of the {amount} numbers is: {sum} '. For example, if the array is [1, 2, 3, 4, 5], the output should be 'The sum of the 5 numbers is: 15'. 
*/
echo '<h3>Sum Of An Array</h3>';
$array = [1, 2, 3, 4, 5];
$output = $array[0] + $array[1] + $array[2] + $array[3] + $array[4];
$count = count($array);
echo 'The sum of the ' . $count . ' numbers is ' . $output;

/*
  Challenge 2: Colors array

  1. Reverse the `$colors` array.
  2. Add 'purple' and 'orange' to the end of the array.
  3. Replace the second color with 'pink'
  4. Remove the last element of the array.

You should end up with the following array: ['yellow', 'pink', 'blue', 'red', 'purple']
*/

echo '<h3>Colors Array</h3>';

$colors = ['red', 'blue', 'green', 'yellow'];
$colors = array_reverse($colors);
array_push($colors, 'purple');
array_push($colors, 'orange');
array_splice($colors, 1, 0, 'pink');
array_pop($colors);
echo '<pre>';
print_r($colors);
echo '</pre>';
/*
  Challenge 3: Job listings array

  1. Create a multi-dimensional array of associative arrays of 3 job listings with the fields id, job_title, company, contact_email, and contact_phone. Also add an array field for skills. The skills array should be an array of strings with each skill a person has. For example, 'PHP', 'MySQL', 'JavaScript', 'HTML', 'CSS', etc.
  2. Create a new listing using the `array_push()` function. The new listing should have the same fields as the others.
  3. Print out the job_title of the second job listing in the array.
  4. Print out the first skill of the third job listing in the array.
*/

echo '<h3>Job Listings</h3>';

$jobListings = [
  ['id' => '0', 'job_title' => 'Farmer', 'company' => 'FarmingEnjoyers', 'contact_email' => 'farmers@gmail.com', 'contact_phone' => '123456', 'skills' => ['PHP', 'Java']],
  ['id' => '1', 'job_title' => 'Cashier', 'company' => 'CashiersEnjoyers', 'contact_email' => 'cashiers@gmail.com', 'contact_phone' => '654321', 'skills' => ['C', 'C++']],
  ['id' => '2', 'job_title' => 'Truck Driver', 'company' => 'TrucksEnjoyers', 'contact_email' => 'trucks@gmail.com', 'contact_phone' => '098765', 'skills' => ['Dart', 'Flutter']],
];

array_push($jobListings, ['id' => '3', 'job_title' => 'Medic', 'company' => 'HealthEnjoyers', 'contact_email' => 'health@gmail.com', 'contact_phone' => '098765', 'skills' => ['Python', 'Matlab']]);

echo $jobListings[1]['job_title'];
echo '<br>';
echo $jobListings[2]['skills'][0];
