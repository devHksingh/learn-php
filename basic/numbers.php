<?php

$int = 42;
$float = 3.14;
$stringToInt = (int)"100";
$floatToInt = (int)3.14;

var_dump($int,$float,$stringToInt,$floatToInt);
var_dump(
    round(3.7),
    round(3.14),
    round(3.4),
    floor(3.8),
    ceil(3.1),
    min(2,8,1,0,4),
    max(44,88,1,6,20),
    rand(1,10),
    abs(-5)
);

$number = 1234.88;

echo "Fromatted : ". number_format($number,2,".",",") ."\n";