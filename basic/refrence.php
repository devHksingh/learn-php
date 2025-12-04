<?php

function doubleValue(int $number):int{
    $number *=2;
    return $number; 
}

$originalNum = 5;
echo doubleValue($originalNum) . "\n";
var_dump($originalNum);

/**
 * it does not changed original variable (originalNum) bcz in function it passes a copy of it.
 * 
 */
function doubleValueByRef(int &$number):int{
    $number *=2;
    return $number; 
}
var_dump($originalNum);
echo "\n". doubleValueByRef($originalNum) . "\n";

var_dump($originalNum);

/**
 * now it pass it refrence . it changes its original value. 
 */

