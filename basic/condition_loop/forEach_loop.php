<?php

$basket = ['apple'=>3, 'banana'=>4, 'orange'=>2, 'grape'=>5];
$total =0;
foreach($basket as $item => $quantity){
    echo "\n$item : $quantity\n";
    $total += $quantity;
    echo"total number of fruits are : $total";
}

$marks = [45,78,32,90,66];
// find highest marks by foreach loop
$highestMark = 0;
foreach($marks as $mark){
    echo"$mark\n";
    if($mark>$highestMark){
        $highestMark=$mark;
    }
}
echo "highest mark is :$highestMark\n";

$students = [
    ["name" => "John", "age" => 20],
    ["name" => "Lisa", "age" => 22],
    ["name" => "Mike", "age" => 19]
];

// Use foreach to print all names and ages in clean format.
foreach($students as $child => $value){
     echo "Student $child: Name = " . $value['name'] . ",  Age = " . $value['age'] . "\n";
}

foreach($students as $student){
    echo "Name: " . $student['name'] ." Age ". $student['age']."\n";
}