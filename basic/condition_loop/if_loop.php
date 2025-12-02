<?php

$score = 82;

if($score>=90){
    echo "A\n";
}elseif( $score >=80){
    echo "B\n";
}elseif( $score >=70){
    echo "C\n";
}elseif( $score >=60){
    echo "D\n";
}else{
    echo "F\n";
}

// nested if statement

$num = 12;
if($num>0){
    echo"you enter positive number\n";
    if($num%2===0){
        echo"$num is positve even number \n";
    }else{
        echo" $num is positive odd number \n";
    }
}else{
    echo"$num is negative number.\n";
}