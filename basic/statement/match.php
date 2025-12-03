<?php

// match was introduced in PHP 8.0
// match statement used strict comparission (valu and type) 
// 600===600
// in case of switch statement use lossely compare.
// "600" == 600

$status = 600;

$message = match ($status){
    200,300 => "Success",
    400,404,500 => "Error",
    default => "Unknown status"
};
echo "$message \n";