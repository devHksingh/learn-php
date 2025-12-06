<?php


// generator function for genrate n random number 
// normal way

function countDown(int $start): array {
    $result = [];
    for ($i=0;$i<$start;$i++){
        echo"Genrating number...\n";
        $result[] = random_int(1,100);

    }
    return $result;
}

$arr = countDown(5);
var_dump($arr);

foreach (countDown(5) as $number){
    echo "\n printing the number\n";
    echo "\n$number\n";
}

/**
 * in the above case frist we genrating all 5 number.
 * then we printing them one by one
 * Genrating number...
Genrating number...
Genrating number...
Genrating number...
Genrating number...
printing the number
30
printing the number
7
printing the number
27
printing the number
18
printing the number
62
 */

// Genrator function 

function countDown1(int $start): Generator {
   
    for ($i=0;$i<$start;$i++){
        echo"Genrating number...\n";
        yield random_int(1,100);

    }
   
}

foreach (countDown1(5) as $number){
    echo "\n printing the number\n";
    echo "\n$number\n";
}

/**
 * in above genrator function 
 * genrating and printing was worked together .
 * it does not wait to genrate all number one by one then goes to printing
 * it genrate one number then it print that . and so on ...
 * Genrating number...

 printing the number

55
Genrating number...

 printing the number

9
Genrating number...

 printing the number

5
 */