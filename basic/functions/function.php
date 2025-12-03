<?php


function greet($name){
    return "Hello , $name!";
}

echo greet("harshit");

// in greet function name is required aggrument .

// optional argument

function greetWithTime($name,$time = "day"){
    return "\nGood $time, $name\n";
}

echo greetWithTime("harshit");
echo greetWithTime("harshit","eve");