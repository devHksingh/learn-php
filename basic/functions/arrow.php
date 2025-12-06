<?php

$numbers = [1,2,3,4,5,6];
$multiplier = 4;
// normal way
$squared = array_map(function($n){
    return $n * $n;
},$numbers);

// by arrow function 
$squared2 = array_map(fn($n)=> $n*$n,
$numbers);

var_dump($numbers,$squared,$squared2);

// normal way 
$multiplyBy4 = array_map(function($n) use($multiplier){
    return $n*$multiplier;
},$numbers);

/**
 * in normal way we need to pass variable by "use".
 * but in arrow function it can use global variable .
 * 
 */
$multiplerBy4 = array_map(fn($n)=>
$n*$multiplier,
$numbers);