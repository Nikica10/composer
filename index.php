<?php

require_once 'vendor\autoload.php';

$firstClass = new FirstClass;
echo $firstClass->firstMethod() . "<br>";

$secondClass = new SecondClass;
echo $secondClass->secondMethod() . "<br>";

$appClassOne = new Application\ApplicationClassOne;
echo $appClassOne->appMethodOne() . "<br>";

$appClassTwo = new Application\ApplicationClassTwo;
echo $appClassTwo->appMethodTwo() . "<br>";

echo Hello();