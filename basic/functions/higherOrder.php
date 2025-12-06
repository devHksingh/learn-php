<?php


/**
 * Higher order function are function that either take function as arguments or return functions
 * 
 */

$people = [
    ["name"=>"Alice", 'age'=>28],
    ["name"=> "Bob", "age"=> 26]
];
// usort is heghier order function
// array_map() function also higherOrder function


usort(
    $people,
    fn($a,$b)=> $a['age']- $b["age"]
);
var_dump($people);


$users = [
    ["name"=>"Alice", 'id'=>1,'role' =>"admin"],
    ["name"=> "Bob", "id"=> 2,'role' =>"supervisor"],
    ["name"=> "Charlie", "id"=> 3,'role' =>"user"],
    ["name"=> "David", "id"=> 4,'role' =>"user"],
];

function createFilter($key,$value){
    return fn($item)=> $item[$key] === $value;

}

$isAdmin = createFilter("role","admin");
$admins = array_filter($users,$isAdmin);
var_dump($admins);

// find user

$isBob = createFilter("name","Bob");
$filterBob = array_filter($users,$isBob);
echo "\n find user \n";
var_dump($filterBob);