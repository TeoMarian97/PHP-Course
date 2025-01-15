<?php
$names = array('John', 'Jack', 'Jill');
$numbers = [1, 2, 3, 4, 5, 6];

function inspect($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
}

inspect($names);
inspect($numbers);

print_r($names);
print_r($numbers);

echo $names[2];
echo $numbers[3];

//Add elem to array
$numbers[6] = 100;
inspect($numbers);
$numbers[] = 101; //empty brackets adds to the end
inspect($numbers);

//Changing element from the array
$numbers[3] = 200;
inspect($numbers);

//Delete/remove elements from the array
unset($numbers[3]);
inspect($numbers);

$numbers = array_values($numbers); //now it's reindexed properly after we deleted stuff



?>

<h1>Hello</h1>