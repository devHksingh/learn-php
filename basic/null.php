<?php
declare(strict_types=1);

$abc = null;
$db = $abc ?? "default";
// if abc variable is null then use "default" value.
/**
 * Is the variable NULL ?
 * If YES → use the value on the right side.
 * If NO → use the value on the left side.


 */

var_dump(
    null,
    null == false,
    null == 0,
    null == "",
    null == [],
    $abc,
    isset($abc),
    is_null($abc),
    $db,
    empty([]),
);
// isset() is a built in function used to check whether a variable is set and not null.

function greet( ?string $name){
    echo "\n Hello , $name \n";
}

greet("jhon");
// parameter can be null in greet function
greet(null);

function greet2(?string $name ){
    echo "\n Hello , " . ($name ?? "stranger"). "\n";
}

greet2(null);

// remove the element in array which are null

var_dump(
    array_filter([1,null,"",[],3])
);