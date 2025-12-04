<?php

$largeArray = range(1,1_000_000);

$startTime = microtime(true);
$startMem = memory_get_usage();


$out=[];
// without reference
// foreach($largeArray as $value){
//     $out[] = $value*2;
// }
// with reference
foreach($largeArray as &$value){
    $out[]= $value*2;
}

$endTime = microtime(true);
$endMemory = memory_get_usage();

echo "Time : ". ($endTime-$startTime). "in seconds"."\n";

echo "Memory : " . round(($endMemory-$startMem)/1024/1024) ."MB \n";
