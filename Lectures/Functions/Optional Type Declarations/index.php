<?php

declare(strict_types=1); //this is needed to enable the strict declaration

function getSum(int $a, int $b): int  //forces them to be int
{
    return $a + $b;
}

echo getSum(1, 1);


function greeting(string $name): void  //so you don't have a return value
{
    echo 'Hello ' . $name;
}
