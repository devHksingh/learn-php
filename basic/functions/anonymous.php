<?php


$greet = function($name){
    return "Hello, $name\n";
};

echo $greet("David");

$numbers = [1,2,3,4];

$squared = array_map(function($n){
    return $n * $n;
}, $numbers);

var_dump($numbers,$squared);

$message = "Bye";

$greet2 = function ($name) use($message){
    $message = $message . "!";
    return "$message , $name\n";
};
echo $greet2("david");

echo $message . "\n";

$greet3 = function($name) use(&$message){
    $message = $message ."!";
    return "$message ,$name \n";
};

echo $greet2("jhon");
echo $message; // now message is changed due to it pass by refrence not passes a copy.also changed in original value.

// use
/**
 * in an anonymous function (closures) in PHP , it does not automatically have access to variables that are outside the function .
 * use($var) => passes copy -> outside variable unchanged .
 * use(&$var) => passes refrence -> outside variable changes.
 */