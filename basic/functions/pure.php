<?php

function addNumber(int $a, int $b):int{
    return $a +$b;
}

// function addNumber is pure function it always return same output 
/**
 * It is 
 * Predictable
 * Testable
 * Reusable
 * restult can be cacheable
 * 
 */

$total = 0;

function addToTotal (int $value){
    global $total;
    $total += $value;
    return $total;
}

var_dump($total,addToTotal(2));

// above function addToTotal always chages the output even the same parameter.