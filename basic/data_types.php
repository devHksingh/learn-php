<?php

$isStudent =1;

// var_dump is used to print information about a variable
var_dump($isStudent, $isStudent == true,$isStudent === true);
/**
 * output 
 * int(1) bool(true) bool(false)
 * first it print its value
 * type coercion happens in second comparison (==)
 * strict comparesion third comparison checks both value and type (===)


 */
$scores = [85,"90"];
// suming up all values
// type coercion occur it convert string 90 to int 90 number then it add with 85
var_dump($scores[0]+$scores[1]);
// float>init > string 
$newScores = [85,"90",95.5];
var_dump($newScores,$newScores[0]+$newScores[1]+$newScores[2]);

$total = $newScores[0]+$newScores[1]+$newScores[2];

echo "Total score is : " . $total. "\n";
echo "Total score is : $total \n";

// difference between print echo and var_dump
/**
 * echo
 * Used to output text
 * Can output one or more things
 * Faster then print
 * Does not return any value
 * print
 * Also used to output text
 * Can only output one argument
 * Slightly slower then echo
 * print "Hello World";
 * var_dump()
 * Used to display detailed information about variables 
 * Shows type , length and value
 * Useful for degbugging
 */