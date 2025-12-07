<?php

$name = "Alice";
$age= 30;

printf("%s is %d years old.",$name,$age);

$csv = "apple,banna,cherry";
$fruits = explode(",",$csv);

var_dump($fruits);

// covert string to arrray 

var_dump($fruits, implode(",",$fruits));

// string padding (fixed lenght field  )

$padded = str_pad("Hello", 11,"-",STR_PAD_BOTH);

echo"$padded\n";

// string triming

var_dump(trim("  Hello World    "));
