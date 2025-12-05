<?php

function greet(string $name , string $greeting ="Hello", bool $isShoot = false){
    $message = "$greeting , $name \n";
    return $isShoot? strtoupper($message):$message;
}

echo greet("jhon");
echo greet("alice","hi");
echo greet("harshit", "good day!");

echo greet(name:"harshit", greeting:"Good eve", isShoot:true);