<?php

function add($a, $b)
{
    return $a + $b;
}

echo add(1, 2);
echo '<br>';
echo add(100, 250);
echo '<br>';

function sayHello($name)
{
    return 'Hello ' . $name;
}
echo sayHello('John');
echo '<br>';

function  addAll(...$numbers)
{
    $total = 0;
    foreach ($numbers as $number) {
        $total += $number;
    }
    return $total;
}

echo addAll(1, 2, 3, 4, 5);
echo '<br>';
