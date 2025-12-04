<?php

$superhero = "Batman";

// case 1: accessing global variable inside function with 'global' keyword
function revealIdentity(){
   global $superhero;
    echo "The superhero is " . $superhero . "\n";
    echo "$superhero real identity is Bruce Wayne" . "\n";
}
/**
 * in above function revealIdentity, $superhero variable is not accessible because it is defined in the global scope.
 * To access the global variable inside the function, we can use the 'global' keyword.
 * it may be less resuseable
 * 
 */

// case 2 : takeing variable as argument but both $superhero variable are different

function revealIdentity1($superhero){
    echo "The superhero is " . $superhero . "\n";
    echo "$superhero real identity is Bruce Wayne" . "\n";
}

function revealIdentity2($superhero){
    $message="real identity is Bruce Wayne";
    echo "The superhero is " . $superhero . "\n";
    echo "$superhero $message" . "\n";
}

/**
 * in above function $message is local variable and cannot access outside of scope .it basically undefined
 */

revealIdentity();
revealIdentity2($superhero);

// static variable

function countVistors(){
    static $visitorCount = 0;
    $visitorCount++;
    echo "Visitor #$visitorCount has arrived. \n";
}
/**
 * it preserve the  $visitorCount (varaable) inside the function .
 */

function connect(){
    echo"\n dummy db connect function \n";
}

function getDb(){
    static $db;

    if($db === null){
        $db = connect();
    }
    return $db;
}

/**
 * it create single connection call and kept on all subsequent call
 */

for ($i=0 ;$i<=2;$i++){
    countVistors();
}