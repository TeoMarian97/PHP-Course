<?php

//Global scope
$name = 'Alice';

function sayHello($name)
{
    //Local scope
    echo 'Hello' . $name;
}

sayHello($name);

//In PHP the Global variables can't be used like in other languages (C, Java)

function sayHello2()
{
    global $name;
    echo 'Hello ' . $name;
}

sayHello2();

function sayGoodbye()
{
    $names = ['Jack', 'Jill'];
    echo $names[0];
}

sayGoodbye();
