<?php
// to impose strict type
declare(strict_types=1);

function add(int $a, int $b):int {
    return $a +$b;
}

// var_dump(add("5",3));
// it convert 5.0 float to int
var_dump(add((int)5.0,3));
