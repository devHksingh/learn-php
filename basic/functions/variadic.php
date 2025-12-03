<?php
declare(strict_types=1);

function sum(...$numbers){
    $sum = 0;
    var_dump($numbers);
    foreach($numbers as $number){
        $sum += $number;
    }
    return $sum;
}

var_dump(sum());
var_dump(sum(2,2));

// required argument with variadic 

function introduceTeam($teamName, ...$members){
    echo "Team: $teamName \n";
    var_dump($members);
    echo "Members: " . implode(" ,",$members ). "\n";
}

introduceTeam("a team","jhon");

// variadic with type

function add(int ...$numbers):int{
    $sum =0;
    foreach($numbers as $number){
        $sum +=$number;
    }
    return $sum;
}

echo add(1,2,2,1)."\n";

// unpacking example 

$numbers = [1,2,3,4,5,6];

var_dump((add(...$numbers)));

$members = ["harshit","jhon","doe"];
introduceTeam("b Team",...$members);
introduceTeam("c Team","harry",...$members);